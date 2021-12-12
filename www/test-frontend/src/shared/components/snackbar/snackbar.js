export default {
    data: () => ({
        disabled: false,
        loader: false,
        loading: false,
        snackbar: { status: false, text: '', timeout: 2000},
    }),
    methods: {
        // to get one application in learnify
        getOneApplication() {
            this.snackbar = {
                status: true,
                text:'data.message',
                timeout: 2000
            };
        }
    },
    mounted() {
        this.getOneApplication();
    }
}
