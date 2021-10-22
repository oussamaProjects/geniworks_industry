"use strict";
// Class definition
var KTBootstrapTouchspin = function() {

    // Private functions
    var demos = function() {
        // minimum setup
        $('#kt_touchspin_1, #kt_touchspin_2_1').TouchSpin({
            buttondown_class: 'btn btn-secondary',
            buttonup_class: 'btn btn-secondary',

            min: 0,
            max: 100,
            step: 0.1,
            decimals: 2,
            boostat: 5,
            maxboostedstep: 10,
        });

        // with prefix
        $('#kt_touchspin_2, #kt_touchspin_2_2').TouchSpin({
            buttondown_class: 'btn btn-secondary',
            buttonup_class: 'btn btn-secondary',

            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: '$'
        });

        // vertical button alignment:
        $('#kt_touchspin_3, #kt_touchspin_2_3').TouchSpin({
            buttondown_class: 'btn smad btn-secondary',
            buttonup_class: 'btn smad btn-secondary',

            min: 50,
            max: 1000,
            stepinterval: 50,
            maxboostedstep: 1000,
            postfix: 'KM'
        });
        $('#kt_touchspin_prices, #kt_touchspin_prices_1, #kt_touchspin_prices_2, #kt_touchspin_prices_3').TouchSpin({
            buttondown_class: 'btn smad btn-secondary',
            buttonup_class: 'btn smad btn-secondary',

            min: 50,
            max: 1000,
            stepinterval: 50,
            maxboostedstep: 1000,
            postfix: 'MAD'
        });

        // vertical buttons with custom icons:
        $('#kt_touchspin_4, #kt_touchspin_2_4').TouchSpin({
            

            min: 50,
            max: 500,
            stepinterval: 10,
            maxboostedstep: 500,
            
            buttondown_class: 'btn btn-secondary',
            buttonup_class: 'btn btn-secondary',
            verticalbuttons: true,
            verticalup: '<i class="la la-plus"></i>',
            verticaldown: '<i class="la la-minus"></i>'

        });
        $('#kt_touchspin_41').TouchSpin({
            

            min: 1,
            max: 4,
            stepinterval: 1,
            maxboostedstep: 4,
            
            buttondown_class: 'btn btn-secondary',
            buttonup_class: 'btn btn-secondary',
            verticalbuttons: true,
            verticalup: '<i class="la la-plus"></i>',
            verticaldown: '<i class="la la-minus"></i>'

        });
        $('#kt_touchspin_4_2').TouchSpin({
            

            min: 1,
            max: 3,
            stepinterval: 1,
            maxboostedstep: 3,
            
            buttondown_class: 'btn btn-secondary',
            buttonup_class: 'btn btn-secondary',
            verticalbuttons: true,
            verticalup: '<i class="la la-plus"></i>',
            verticaldown: '<i class="la la-minus"></i>'

        });

        // vertical buttons with custom icons:
        $('#kt_touchspin_5, #kt_touchspin_2_5').TouchSpin({
            buttondown_class: 'btn btn-secondary',
            buttonup_class: 'btn btn-secondary',
            verticalbuttons: true,
            verticalup: '<i class="la la-angle-up"></i>',
            verticaldown: '<i class="la la-angle-down"></i>'
        });
    }

    var validationStateDemos = function() {
        // validation state demos
        $('#kt_touchspin_1_validate').TouchSpin({
            buttondown_class: 'btn btn-secondary',
            buttonup_class: 'btn btn-secondary',

            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: '$'
        });

        // vertical buttons with custom icons:
        $('#kt_touchspin_2_validate').TouchSpin({
            buttondown_class: 'btn btn-secondary',
            buttonup_class: 'btn btn-secondary',

            min: 0,
            max: 100,
            step: 0.1,
            decimals: 2,
            boostat: 5,
            maxboostedstep: 10,
        });

        $('#kt_touchspin_3_validate').TouchSpin({
            buttondown_class: 'btn btn-secondary',
            buttonup_class: 'btn btn-secondary',
            verticalbuttons: true,
            verticalupclass: 'la la-plus',
            verticaldownclass: 'la la-minus'
        });
    }

    return {
        // public functions
        init: function() {
            demos();
            validationStateDemos();
        }
    };
}();

jQuery(document).ready(function() {
    KTBootstrapTouchspin.init();
});