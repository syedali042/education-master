<div class="sb2-2-3">
    <style type="text/css">
        .row{
            margin-left: 0;
            margin-right: 0;
        }
    </style>
    <div class="row">
        <div class="col-md-12">
		<div class="box-inn-sp admin-form" style="margin-top: 50px;">
                <div class="inn-title">
                    <h4>Account Settings</h4>
                </div>
                <div class="tab-inn">
                    <form action="javascript://" method="POST" class="gen">
                        <div class="row">
                            <div class="account-settings">
                                <div class="user-profile">
                                    <input type="hidden" name="submitGen">
                                    <div class="user-avatar">
                                        <img class="studentUploadedImage" src="<?=AD_IMG?>students/<?=$_SESSION['login_student']['student_img']?>" alt="<?=$_SESSION['login_student']['student_name']?>">
                                    </div>
                                    <center>
                                            <label onMouseOver="this.style.cursor='pointer'" for="student_image" class="addNewStudentImg">
                                                Change Profile Picture
                                            </label>
                                            <input type="file" id="student_image" style="display: none;">
                                            <input type="hidden" class="student_img" name="student_img" value="<?=$_SESSION['login_student']['student_img']?>">
                                    </center>
                                </div>
                                <!-- <div class="about">
                                    <h5>About</h5>
                                    <p>I'm Yuki. Full Stack Designer I enjoy creating user-centric, delightful and human experiences.</p>
                                </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="student_name" name="student_name" type="text" class="validate" required="" value="<?=$_SESSION['login_student']['student_name']?>">
                                <label for="first_name" class="">First Name : </label>
                            </div>
                            <div class="input-field col s12">
                                <input id="student_fahter" name="student_fahter_name" type="text" class="validate" required="" value="<?=$_SESSION['login_student']['student_father_name']?>">
                                <label for="last_name" class="">Last Name : </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="student_email" name="student_email" type="email" class="validate" required="" value="<?=$_SESSION['login_student']['student_email']?>">
                                <label for="email">Email : </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" name="gen" class="waves-button-input" value="Update"></i>
                            </div>
                        </div>
                    </form>
                    <br>
                    <h5>Reset Password</h5>
                    <form action="javascript://" method="POST" class="pass">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="student_password" name="student_password" type="password" class="validate" required="">
                                <label for="email">Current Password : </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="student_new_password" name="student_new_password" type="password" class="validate" required="">
                                <label for="email">New Password : </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="student_confirm_new_password" name="student_confirm_new_password" type="password" class="validate" required="">
                                <label for="email">Confirm Password : </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" name="submit" onclick="changePass()" class="waves-button-input" value="Change"></i>
                                <h4 style="display: none;color: red;" id="p-error"> <br></h4>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?=AD_JS?>/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#student_image").on('change', function(){
            let data = new FormData();
            data.append('main_image', $(this).prop('files')[0]);
            data.append('student_image', 'student_image');
            $.ajax({
                type: 'POST',
                processData: false,
                contentType: false,
                data: data,
                url: '<?=AD_AJAX.'db.php'?>',
                dataType : 'json',
                success: function(resp){
                    // resp = $.parseJSON(resp);
                    console.log(resp.data);
                    if (resp.status == true)
                    {   
                        $(".student_img").val(resp.data);
                        $(".studentUploadedImage").attr('src', '<?=AD_IMG?>students/'+resp.data);
                        $('.addNewStudentImg').css('display','none');
                      //  $('#roomImageDiv').css('border','none');
                    }
                    else
                    {
                        $("#validateButton1").text('Upload An Image First');
                    }
                }
            });
        });

        $(document).on('submit', '.gen', function(event) {
            event.preventDefault();
            $.post('<?=AD_AJAX?>studentAjax.php', $(this).serialize(), function(resp) {
                resp = $.parseJSON(resp);
                if(resp.status==true){
                    window.open('<?=BASEURL?>logout', '_self');
                }
                console.log(resp);
            });
        });

        changePass = () => {

            let student_password = $('#student_password').val();
            let student_new_password = $('#student_new_password').val();
            let student_confirm_new_password = $('#student_confirm_new_password').val();
            if(student_confirm_new_password==student_new_password){
                $.post('<?=AD_AJAX?>studentAjax.php', {student_password:student_password, student_new_password:student_new_password, changePass:'changePass'}, function(resp) {
                    resp = $.parseJSON(resp);
                    if(resp.status==true){
                        window.open('<?=BASEURL?>logout', '_self');
                    }else{
                        $('#p-error').text('Old Password Did Not Match To Your Account.');
                        $('#p-error').text('display','block');
                        setTimeout(function(){
                            $('#p-error').text('display','none');
                        }, 2000);
                    }

                    console.log(resp);
                });  
            }else{
                $('#p-error').text('New Password Did Not Match With Confirm Password');
                $('#p-error').text('display','block');
                setTimeout(function(){
                    $('#p-error').text('display','none');
                }, 2000);
            }

        }

    });
</script>