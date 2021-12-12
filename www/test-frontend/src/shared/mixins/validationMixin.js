export default {
    data() {
        return {
            isValid: false,
            password: "",
            confirmPassword: "",
            rules: {
                // Email validation rules
                emailRequired: value => !!value || 'Email is Required',
                email: value => {
                    const pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    return pattern.test(value) || 'Invalid e-mail.'
                },

                // Name validation rules
                nameRequired: v => !!v || 'Name is required',
                name: v => v.length >= 2 || 'Name must not be less than 2 characters',

                // Name validation rules
                usernameRequired: v => !!v || 'Username is required',
                // username: v => v.length <= 10 || 'Username must be less than 10 characters',

                // Password validation rules
                passwordRequired: v => !!v || 'Password is required',
                password: v => v.length >= 6 || 'password must not be less than 6 characters',

                //Customer Id required,
                customer_idRequired: v => !!v || 'Name is required',



            },
        }
    },
    computed: {
        /**
         * Checks if two password fields match
         *
         * @returns {string|boolean}
         */
        passwordMatchRule() {
            let passwordMatch = this.password === this.confirmPassword;
            if(passwordMatch && this.password && this.confirmPassword){
                this.isValid = true;
                return passwordMatch;
            }
            this.isValid = false;
            return "Passwords do not match";
        }
    },
};
