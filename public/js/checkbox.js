// $(document).ready(function () {
//
//     let checkbox = document.querySelector("input[id=flexSwitchCheckChecked]")
//     checkbox.addEventListener('change', function () {
//
//         console.log(checkbox);
//         if (this.checked) {
//             if (confirm('active?')) {
//                 const url = $(this).attr('data-action');
//                 const tokenInput = $("meta[name=csrf]").attr("content");
//                 $.ajax({
//                     method: "post",
//                     url: url.replace('active',1).replace('id',$(this).attr('data-id')),
//                     data: {
//                         '_token': tokenInput.value
//                     },
//                     success() {
//                         window.location.reload();
//                     }
//
//                 })
//             }
//         } else {
//             if (confirm('disabled?')) {
//                 const url = $(this).attr('data-action');
//                 const tokenInput = $("meta[name=csrf]").attr("content");
//                 $.ajax({
//                     method: "post",
//                     url: url.replace('active',0).replace('id',$(this).attr('data-id')),
//                     data: {
//                         '_token': tokenInput.value
//                     },
//                     success() {
//                         window.location.reload();
//                     }
//
//                 })
//             }
//         }
//     });
// })
//
$(document).ready(function () {

        $('.flexSwitchCheckChecked').on('change',function (e){
        e.preventDefault();

        if (this.checked) {
            if (confirm('active?')) {

                const url = $(this).attr('data-action');
                $.ajax({
                    method: "get",
                    url: url,
                    data: {
                        'active':1
                    },
                    success() {
                        window.location.reload();
                    }

                })
            }
        } else {
            if (confirm('disabled?')) {

                const url = $(this).attr('data-action');
                $.ajax({
                    method: "get",
                    url: url,
                    data: {
                        'active':0
                    },
                    success() {
                        window.location.reload();
                    }

                })
            }
        }

    })

});
