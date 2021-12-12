export const deleteConfirmDialogMixin = {
  data(){
    return{
      message : null,
      dispatch : null
    }
  },
  methods:{
    showDialog(message,dispatch){
      this.$swal(
          {
            title: 'Are you sure?',
            html: `You are trying to delete <b>${message}</b> , you won’t be able to revert this!`,
            type: "warning",
            showCancelButton: true,
            reverseButtons: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }
      ).then((result) => {
        if (result.value) {
          // dispatch;
        }
      });
    }
  }
};
