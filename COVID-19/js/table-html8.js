
"use strict";
var KTDatatablesAdvancedColumnRendering8 = function() {

    var initTable8 = function() {
        var table = $('#kt_table_8');

        // begin first table
        table.DataTable({
            responsive: true,
            paging: true,
            columnDefs: [
                {
                    targets: 0,
                    title: 'Cabin ID',
                    render: function(data, type, full, meta) {
                        var number = KTUtil.getRandomInt(1, 14);
                        var user_img = '100_' + number + '.jpg';

                        var output;
                        if (number > 8) {
                            output = `
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">` + full[0] + `</span>
                                        <a href="#" class="kt-user-card-v2__email kt-link">` + full[2] + `</a>
                                    </div>
                                </div>`;
                        }
                        else {
                            var stateNo = KTUtil.getRandomInt(0, 7);
                            var states = [
                                'success',
                                'brand',
                                'danger',
                                'accent',
                                'warning',
                                'metal',
                                'primary',
                                'info'];
                            var state = states[stateNo];

                            output = `
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">` + full[0] + `</span>
                                        <a href="#" class="kt-user-card-v2__email kt-link">` + full[2] + `</a>
                                    </div>
                                </div>`;
                        }

                        return output;
                    },
                },
               
                
               
             
            ],
        });
    };

    return {

        //main function to initiate the module
        init: function() {
            initTable8();
        }
    };
}();

jQuery(document).ready(function() {
    KTDatatablesAdvancedColumnRendering8.init();
});