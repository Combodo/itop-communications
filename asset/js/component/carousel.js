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
 * Component to manipulate a carousel tile.
 *
 * note: depends on JQuery due to boostrap carousel.
 */
class IpbTileCarousel extends IpbTile {

    /**
     * Constructor.
     *
     * @param sId HTMLElement id
     * @param sName tile name
     * @param sModalId modal id
     */
    constructor(sId, sName, sModalId) {
        super(sId, sName);
        this.sModalId = sModalId;

        // needs jquery, so wait for the page to be ready
        Component.PageReady(() => this.#Init());
    }

    /**
     * Initialize the carousel.
     */
    #Init() {

        // store the jquery elements
        this.$Carousel = $(`#${this.sId}`);
        this.$Modal = $(`#${this.sModalId}`);

        // store the number of items
        this.iModalCurrentMessage = 1;
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

        // change tile title and decoration on slide events
        this.$Carousel.on('slid.bs.carousel', () => {
            let itemElement = $('.item.active', this.$Carousel);
            this.SetTitle(itemElement.data('item-title'));
            this.SetDecorationClass(itemElement.data('item-icon'));
            this.SetIconClass(itemElement.data('item-icon-class'));
        });

        // carousel prev button
        $('.ipb-button--prev', this.$Carousel).on('click', () => {
            this.Prev();
        });

        // carousel next button
        $('.ipb-button--next', this.$Carousel).on('click', () => {
            this.Next();
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

    OpenModal() {

        // start with current carousel message
        let itemElement = $('.item.active', this.$Carousel);
        this.iModalCurrentMessage = itemElement.data('item-number');

        // update modal content
        this.UpdateModal();

        // show modal
        this.$Modal.modal('show');
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
        $('.modal-title', this.$Modal).html(sTitleIcon + '&nbsp; ' + itemElement.data('item-title'));
        $('[data-role="carousel-modal--message-count"]', this.$Modal).html(itemElement.data('item-number') + ' / ' + this.iMessagesCount);

        // update navigation buttons
        this.UpdateModalNavigationButtons();
    }

}

