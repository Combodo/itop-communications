/*
 * Copyright (C) 2013-2024 Combodo SAS
 *
 * This file is part of iTop.
 *
 * iTop is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * iTop is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 */

/**
 * Carousel tile element.
 *
 * note: depends on JQuery due to boostrap carousel.
 */
class IpbCarouselTileElement extends IpbTileElement {

    static {
        BaseElement.PageReady(() => {
            customElements.define("ipb-carousel-tile", IpbCarouselTileElement);
        });
    }

    $Carousel = null;
    $Modal = null;
    iModalCurrentMessage = 1;
    iMessagesCount = 0;

    connectedCallback() {

        // store the jquery elements
        this.$Carousel = $(`#${this.id}`);
        this.$Modal = $(`#${this.getAttribute('data-modal-id')}`);

        // observe the carousel inner element to update the read more button
        new ResizeObserver(() => this.UpdateCarouselReadMore()).observe(this.querySelector('.carousel-inner'));

        // store the number of items
        this.iMessagesCount = this.$Carousel.data('items-count');

        // open the item content in modal
        $(this.$Carousel).on('click', (oEvent) => {

            // prevent modal from opening when clicking on a button or a link
            if (oEvent.target.closest("a") || oEvent.target.closest("button") || oEvent.target.closest("li")) {
                return;
            }

            // open the modal
            this.OpenModal();
        });
	    let itemCurrentElement = $('.item.active', this.$Carousel);
	    this.SetDecorationClass(itemCurrentElement.data('item-icon'));
	
        // change tile title and decoration on slide events
        this.$Carousel.on('slid.bs.carousel', () => {
            let itemElement = $('.item.active', this.$Carousel);
            this.SetTitle(itemElement.data('item-title'));
            this.SetDecorationClass(itemElement.data('item-icon'));
            this.SetIconClass(itemElement.data('item-icon-class'));
            this.UpdateCarouselReadMore();
        });

        // carousel prev button
        $('.ipb-button--prev', this.$Carousel).on('click', () => {
            this.Prev();
        });

        // carousel next button
        $('.ipb-button--next', this.$Carousel).on('click', () => {
            this.Next();
        });

        // carousel modal open
        $('.ipb-button--open-modal', this.$Carousel).on('click', () => {
            this.OpenModal();
        });

        // modal prev button
        $('.ipb-button--prev', this.$Modal).on('click', () => {
            if (this.iModalCurrentMessage > 1) this.iModalCurrentMessage--;
            this.UpdateModal();
        });

        // modal next button
        $('.ipb-button--next', this.$Modal).on('click', () => {
            if (this.iModalCurrentMessage < this.iMessagesCount) this.iModalCurrentMessage++;
            this.UpdateModal();
        });

        // initial modal update
        this.UpdateModal();

        this.UpdateCarouselReadMore();
    }

    Pause() {
        this.$Carousel.carousel('pause');
    }

    Cycle() {
        this.$Carousel.carousel('cycle');
    }

    Number(number) {
        this.$Carousel.carousel(number);
    }

    Prev() {
        this.$Carousel.carousel('prev');
    }

    Next() {
        this.$Carousel.carousel('next');
    }

    UpdateCarouselReadMore() {

        let innerHeight = this.querySelector('.carousel-inner').offsetHeight;
        let activeHeight = this.querySelector('.item.active').offsetHeight;

        this.querySelector('.ipb-read-more').classList.toggle('ipb-is-hidden', activeHeight < innerHeight);
    }

    OpenModal() {

        // start with current carousel message
        let itemElement = $('.item.active', this.$Carousel);
        this.iModalCurrentMessage = itemElement.data('item-number');

        // update modal content
        this.UpdateModal();

	    // Prepare base options
	    let oOptions = {
		    base_modal: {
			    usage: 'replace',
			    selector: '#' + this.$Modal.attr('id')
		    },
		    size: 'lg',
		    
	    };

	    // show modal
	    CombodoModal.OpenModal(oOptions);
    }

    UpdateModalNavigationButtons() {
        $('.ipb-button--prev', this.$Modal).prop("disabled", this.iModalCurrentMessage === 1);
        $('.ipb-button--next', this.$Modal).prop("disabled", this.iModalCurrentMessage === this.iMessagesCount);
    }

    UpdateModal() {

        // update modal content
        let itemElement = $(`.item[data-item-number="${this.iModalCurrentMessage}"]`, this.$Carousel);
        let sTitleIcon = `<div class="ipb-tile--decoration ${itemElement.data('item-icon')}"><span class="ipb-tile--decoration--icon icon ${itemElement.data('item-icon-class')}"></span></div>`;
        $('.modal-body', this.$Modal).html(itemElement.html());
        $('.modal-title', this.$Modal).html(sTitleIcon + itemElement.data('item-title'));
        $('[data-role="carousel-modal--message-count"]', this.$Modal).html(itemElement.data('item-number') + ' / ' + this.iMessagesCount);

        // update navigation buttons
        this.UpdateModalNavigationButtons();
    }

}

