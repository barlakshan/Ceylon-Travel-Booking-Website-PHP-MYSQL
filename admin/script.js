let sidebar = document.querySelector("..sidebar ");
let sidebarBtn = document.querySelector(".sidebarBtn");

sidebarBtn.onclick = function(){
    sidebar.classList.toggle("active");
};

function lout(){
    swal({
        title: "Are you sure?",
        text: "You are about to leave the system!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            swal("You will be successfully log out from the system!", {
            icon: "success",
            });
            location.replace("../admin.php")
        } else {
            swal("You are still safely in the system!");
        }
        });
    }

