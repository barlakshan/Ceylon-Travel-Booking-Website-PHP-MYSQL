$("#formValidation").validate({
    rules: {
        name:{
            minlength: 2
            }
        },
        messages:{
            required: "Required Input",
            minlength: "Name must only contain characters from the alphabet"
        },
    submitHandler: function(form) {
      form.submit();
    }
});