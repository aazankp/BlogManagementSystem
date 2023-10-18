$(document).ready(function(){
    let sidebar = document.querySelector(".sidebar");
    console.log(sidebar);
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");
    closeBtn.addEventListener("click", ()=>{
        sidebar.classList.toggle("open");
        menuBtnChange();//calling the function(optional)
    });
    searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
    });
    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
        if(sidebar.classList.contains("open")){
            closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
        }else {
            closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
        }
    }

    $(document).on("click", "#log_out", function(){
        window.location.replace("../Login/Logout.php");
    });

    $(document).on("click", "#posts", function(){
        $.ajax({
            url: "../vendor/Process.php?action=Admin_Posts", 
            type: "POST",
            success: function(result){
                $("#Admin_Body_Content").html(result);
          }});
    });

    function Admin_Posts() {
        $.ajax({
            url: "../vendor/Process.php?action=Admin_Posts", 
            type: "POST",
            success: function(result){
                $("#Admin_Body_Content").html(result);
                var table = $('#view_posts').DataTable( {
                    lengthChange: false,
                    buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
                } );
                table.buttons().container().appendTo( '#view_posts_wrapper .col-md-6:eq(0)' );
            }
        });
    }

    Admin_Posts();

    $(document).on("submit", "#post_data", function(event) {
        event.preventDefault();
        var formdata = new FormData(this);
        $.ajax({
         url: "../vendor/Process.php?action=Admin_Posts_Data",
         type: "POST",
         data: formdata,
         cache: false,
         processData: false,
         contentType: false,
         success: function(result){
             if (result == 1) {
                 Swal.fire({
                     position: 'center',
                     icon: 'success',
                     title: 'Your Form Name has been Submitted',
                     showConfirmButton: false,
                     timer: 2000
                   })
                   Admin_Posts();
             } else {
                alert(result);
            }
        }});
    });

    $(document).on("click", ".post_update", function(){
        post_id = $(this).val();
        $.ajax({
            url: "../vendor/Process.php?action=Admin_Posts_Update", 
            type: "POST",
            data: { post_id: post_id },
            success: function(result){
                $("#Admin_Body_Content").html(result);
          }});
    });

    $(document).on("submit", "#post_data_update", function(event) {
        event.preventDefault();
        var formdata = new FormData(this);
        $.ajax({
         url: "../vendor/Process.php?action=Admin_Posts_Update_Data",
         type: "POST",
         data: formdata,
         cache: false,
         processData: false,
         contentType: false,
         success: function(result){
             if (result == 1) {
                 Swal.fire({
                     position: 'center',
                     icon: 'success',
                     title: 'Your Data has been Updated',
                     showConfirmButton: false,
                     timer: 2000
                   })
                   Admin_Posts();
             } else {
                alert(result);
            }
        }});
    });

    $(document).on('click', '.post_delete', function () {
        post_id = $(this).val();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "../vendor/Process.php?action=Delete_Post",
                    type: "POST",
                    data: {post_id:post_id},
                    success: function(result){
                        Admin_Posts();
                }});
              Swal.fire(
                'Deleted!',
                'Your Data has been deleted.',
                'success'
              )
            }
        })        
    });

});