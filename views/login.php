<section>
		<div class="ad-log-main">
			<div class="ad-log-in" style="margin-top: 120px;">
				<div class="ad-log-in-logo">
					<a href="index.html"><img src="images/logo.png" alt=""></a>
				</div>
				<div class="ad-log-in-con">
			    <div class="log-in-pop-right">
                    <h4>Student Login</h4>
                    <br><br>
                    <!-- <p>Don't have an account? Create your account. It's take less then a minutes</p> -->
                    <form class="s12" action="<?=BASEURL?>studentLogin" method="POST">
                        <div>
                            <div class="input-field s12">
                                <input type="text" name="student_email" required="" data-ng-model="name" class="validate">
                                <label class="">User name</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" name="student_pass" required="" class="validate">
                                <label>Password</label>
                            </div>
                        </div>
                        <div>
                            <div class="s12 log-ch-bx">
                                <p>
                                    <input type="checkbox" id="test5">
                                    <label for="test5">Remember me</label>
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <i class="waves-effect waves-light log-in-btn waves-input-wrapper" style=""><input type="submit" value="Login" class="waves-button-input"></i> 
                            </div>
                        </div>
                        
                    </form>
                </div>
				</div>
			</div>
		</div>
   </section>