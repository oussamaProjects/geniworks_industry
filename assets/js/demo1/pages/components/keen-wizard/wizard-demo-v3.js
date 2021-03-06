// Class definition
var KTWizardDemo = function () {
    // Base elements
    var wizardEl;
    var formEl;
    var validator;
    var wizard;
    
    // Private functions
    var initWizard = function () {
        // Initialize form wizard
        wizard = new KTWizard('kt_wizard_v3', {
            startStep: 1,
        });

        // Validation before going to next page
        wizard.on('beforeNext', function(wizardObj) {
            if (validator.form() !== true) {
                wizardObj.stop();  // don't go to the next step
            }
        })

        // Change event
        wizard.on('change', function(wizard) {
            KTUtil.scrollTop();    
        });
    }

    var initValidation = function() {
        validator = formEl.validate({
            // Validate only visible fields
            ignore: ":hidden",

            // Validation rules
            rules: {
                //= Client Information(step 1)
                username: {
                    required: true 
                },
                email: {
                    required: true,
                    email: true 
                },       
                password: {
                    required: true,
                },     

                //= Client Information(step 2)
                // Profile Details
                address1: {
                    required: true,
                },
                address2: {
                    required: true,
                }, 
                // Mailing Address
                city: {
                    required: true,
                }, 
                zip: {
                    required: true,
                }, 
                state: {
                    required: true,
                }, 
                country: {
                    required: true,
                }, 

                //= Client Information(step 3)
                // Company Details
                company_name: {
                    required: true,
                }, 
                company_id: {
                    required: true,
                }, 
                company_email: {
                    required: true,
                }, 
                company_tel: {
                    required: true,
                },               
                'account_communication[]': {
                    required: true
                },

                //= Client Information(step 4)
                // Billing Information
                billing_card_name: {
                    required: true
                },
                billing_card_number: {
                    required: true,
                    creditcard: true
                },
                billing_card_exp_month: {
                    required: true
                },
                billing_card_exp_year: {
                    required: true
                },
                billing_card_cvv: {
                    required: true,
                    minlength: 2,
                    maxlength: 3
                },

                //= Confirmation(step 5)
                accept: {
                    required: true
                }
            },

            // Validation messages
            messages: {
                'account_communication[]': {
                    required: 'You must select at least one communication option'
                },
                accept: {
                    required: "You must accept the Terms and Conditions agreement!"
                } 
            },
            
          

            // Submit valid form
            submitHandler: function (form) {
                
            }
        });   
    }

  

    return {
        // public functions
        init: function() {
            wizardEl = KTUtil.get('kt_wizard_v3');
            formEl = $('#kt_form');

            initWizard(); 
            initValidation();
           
        }
    };
}();

jQuery(document).ready(function() {    
    KTWizardDemo.init();
});