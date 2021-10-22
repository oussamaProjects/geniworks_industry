
"use strict";
var KTDatatablesAdvancedColumnRendering2 = function() {

    var initTable2 = function() {
        var table2 = $('#kt_table_2');

        // begin first table2
        table2.DataTable({
            responsive: true,
            paging: true,
            columnDefs: [
                {
                    targets: 0,
                    title: 'Cabin ID',
                    render: function(data, type, full2, meta) {
                        var number2 = KTUtil.getRandomInt(1, 14);
                        var user_img2 = '100_' + number2 + '.jpg';

                        var output2;
                        if (number2 > 8) {
                            output2 = `
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">` + full2[0] + `</span>
                                        <a href="#" class="kt-user-card-v2__email kt-link">` + full2[2] + `</a>
                                    </div>
                                </div>`;
                        }
                        else {
                            var stateNo2 = KTUtil.getRandomInt(0, 7);
                            var states2 = [
                                'success',
                                'brand',
                                'danger',
                                'accent',
                                'warning',
                                'metal',
                                'primary',
                                'info'];
                            var state2 = states2[stateNo2];

                            output2 = `
                                <div class="kt-user-card-v2">
                                   
                                    <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">` + full2[0] + `</span>
                                        <a href="#" class="kt-user-card-v2__email kt-link">` + full2[2] + `</a>
                                    </div>
                                </div>`;
                        }

                        return output2;
                    }
                }
               
                
               
             
            ]
        });
    };

    return {

        //main function to initiate the module
        init: function() {
            initTable2();
        }
    };
}();

jQuery(document).ready(function() {
    KTDatatablesAdvancedColumnRendering2.init();
});