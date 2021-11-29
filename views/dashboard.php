    <style type="text/css">
        .subject-div{
            background-color: #060;
            color:#fff;
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 5px;
        }
        #subjects{
            display: none; 
        }
        #lectures{
            display: none;
        }
        #quizez{
            display: none;
        }
        #results{
            display: none;
        }
    </style>
    <!--SECTION START-->
    <section>
        
        <div class="pro-menu">
            <div class="container">
                <div class="col-md-9 col-md-offset-3">
                    <ul>
                        <!-- <li><a href="#dashboard" onclick="showDashboard();">My Dashboard</a></li> -->
                        <!-- <li><a href="#subjects" onclick="showSubjects();">Subjects</a></li>
                        <li><a href="#lectures" onclick="showLectures();">Lectures</a></li>
                        <li><a href="#quiz" onclick="showQuizes();">Exams</a></li>
                        <li><a href="#results" onclick="showResults();">Results</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="stu-db">
            <div class="container pg-inn">
                
                <!-- <div class="col-md-9" id="dashboard" style="display: block;">
                    <div class="udb">

                        <div class="udb-sec udb-prof">
                            <h4><img src="<?=IMG?>icon/db1.png" alt="" /> My Profile</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed
                                to using 'Content here, content here', making it look like readable English.</p>
                        </div>
                        <div class="udb-sec udb-cour-stat">
                            <h4><img src="<?=IMG?>icon/db3.png" alt="" /> Course Status</h4>
                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.The point of using Lorem Ipsummaking it look like readable English.</p>
                            <div class="pro-con-table">
                                <table class="bordered responsive-table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Course Name</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Software Testing</td>
                                            <td>12May 2018</td>
                                            <td>18Aug 2018</td>
                                            <td><span class="pro-user-act">active</span></td>
                                            <td><a href="sdb-course-edit.html" class="pro-edit">edit</a></td>
                                            <td><a href="sdb-course-view.html" class="pro-edit">view</a></td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>Mechanical Design</td>
                                            <td>05Jan 2019</td>
                                            <td>10Feb 2019</td>
                                            <td><span class="pro-user-act">active</span></td>
                                            <td><a href="sdb-course-edit.html" class="pro-edit">edit</a></td>
                                            <td><a href="sdb-course-view.html" class="pro-edit">view</a></td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>Architecture & Planning</td>
                                            <td>21Jun 2020</td>
                                            <td>08Dec 2020</td>
                                            <td><span class="pro-user-act">active</span></td>
                                            <td><a href="sdb-course-edit.html" class="pro-edit">edit</a></td>
                                            <td><a href="sdb-course-view.html" class="pro-edit">view</a></td>
                                        </tr>
                                        <tr>
                                            <td>04</td>
                                            <td>Board Exam Training</td>
                                            <td>08Jun 2018</td>
                                            <td>21Sep 2018</td>
                                            <td><span class="pro-user-act pro-user-de-act">de-active</span></td>
                                            <td><a href="sdb-course-edit.html" class="pro-edit">edit</a></td>
                                            <td><a href="sdb-course-view.html" class="pro-edit">view</a></td>
                                        </tr>
                                        <tr>
                                            <td>05</td>
                                            <td>Yoga Training Classes</td>
                                            <td>16JFeb 2018</td>
                                            <td>26Mar 2018</td>
                                            <td><span class="pro-user-act pro-user-de-act">de-active</span></td>
                                            <td><a href="sdb-course-edit.html" class="pro-edit">edit</a></td>
                                            <td><a href="sdb-course-view.html" class="pro-edit">view</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="udb-sec udb-time">
                            <h4><img src="<?=IMG?>icon/db4.png" alt="" /> Class Time Line</h4>
                            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                            <div class="tour_head1 udb-time-line days">
                                <ul>
                                    <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <div class="sdb-cl-tim">
                                            <div class="sdb-cl-day">
                                                <h5>Today</h5>
                                                <span>10Sep 2018</span>
                                            </div>
                                            <div class="sdb-cl-class">
                                                <ul>
                                                    <li>
                                                        <div class="sdb-cl-class-tim tooltipped" data-position="top" data-delay="50" data-tooltip="Class timing">
                                                            <span>09:30 am</span>
                                                            <span>10:15 pm</span>
                                                        </div>
                                                        <div class="sdb-cl-class-name tooltipped" data-position="top" data-delay="50" data-tooltip="Class Details">
                                                            <h5>Software Testing <span>John Smith</span></h5>
                                                            <span class="sdn-hall-na">Apj Hall 112</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="sdb-cl-class-tim tooltipped" data-position="top" data-delay="50" data-tooltip="Class timing">
                                                            <span>10:15 am</span>
                                                            <span>11:00 am</span>
                                                        </div>
                                                        <div class="sdb-cl-class-name tooltipped" data-position="top" data-delay="50" data-tooltip="Class Details">
                                                            <h5>Mechanical Design Classes <span>Stephanie</span></h5>
                                                            <span class="sdn-hall-na">Apj Hall 112</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="sdb-cl-class-tim">
                                                            <span>11:00 am</span>
                                                            <span>11:45 am</span>
                                                        </div>
                                                        <div class="sdb-cl-class-name sdb-cl-class-name-lev">
                                                            <h5>Board Exam Training Classes <span>Matthew</span></h5>
                                                            <span class="sdn-hall-na">Apj Hall 112</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <div class="sdb-cl-tim">
                                            <div class="sdb-cl-day">
                                                <h5>Tuesday</h5>
                                                <span>11Sep 2018</span>
                                            </div>
                                            <div class="sdb-cl-class">
                                                <ul>
                                                    <li>
                                                        <div class="sdb-cl-class-tim tooltipped" data-position="top" data-delay="50" data-tooltip="Class timing">
                                                            <span>9:30 am</span>
                                                            <span>10:15 am</span>
                                                        </div>
                                                        <div class="sdb-cl-class-name tooltipped" data-position="top" data-delay="50" data-tooltip="Class Details">
                                                            <h5>Agriculture <span>John Smith</span></h5>
                                                            <span class="sdn-hall-na">Apj Hall 112</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="sdb-cl-class-tim">
                                                            <span>10:15 am</span>
                                                            <span>11:00 am</span>
                                                        </div>
                                                        <div class="sdb-cl-class-name">
                                                            <h5>Google Product Training <span>Stephanie</span></h5>
                                                            <span class="sdn-hall-na">Apj Hall 112</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="sdb-cl-class-tim">
                                                            <span>11:00 am</span>
                                                            <span>11:45 am</span>
                                                        </div>
                                                        <div class="sdb-cl-class-name sdb-cl-class-name-lev">
                                                            <h5>Web Design & Development <span>Matthew</span></h5>
                                                            <span class="sdn-hall-na">Apj Hall 112</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <div class="sdb-cl-tim">
                                            <div class="sdb-cl-day">
                                                <h5>Wednesday</h5>
                                                <span>12Sep 2018</span>
                                            </div>
                                            <div class="sdb-cl-class">
                                                <ul>
                                                    <li>
                                                        <div class="sdb-cl-class-tim">
                                                            <span>9:30 am</span>
                                                            <span>10:15 am</span>
                                                        </div>
                                                        <div class="sdb-cl-class-name">
                                                            <h5>Software Testing <span>John Smith</span></h5>
                                                            <span class="sdn-hall-na">Apj Hall 112</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="sdb-cl-class-tim">
                                                            <span>10:15 am</span>
                                                            <span>11:00 am</span>
                                                        </div>
                                                        <div class="sdb-cl-class-name">
                                                            <h5>Mechanical Design Classes <span>Stephanie</span></h5>
                                                            <span class="sdn-hall-na">Apj Hall 112</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="sdb-cl-class-tim">
                                                            <span>11:00 am</span>
                                                            <span>11:45 am</span>
                                                        </div>
                                                        <div class="sdb-cl-class-name sdb-cl-class-name-lev">
                                                            <h5>Board Exam Training Classes <span>Matthew</span></h5>
                                                            <span class="sdn-hall-na">Apj Hall 112</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="l-info-pack-plac"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <h4><span>Holiday: </span> Thursday </h4>
                                        <p>After breakfast, proceed for tour of Dubai city. Visit Jumeirah Mosque, World Trade Centre, Palaces and Dubai Museum. Enjoy your overnight stay at the hotel.In the evening, enjoy a tasty dinner on the Dhow cruise.
                                            Later, head back to the hotel for a comfortable overnight stay.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-9" id="subjects">
                    <div class="stu-subjects">
                            <label style="font-size: 20px;font-weight: bold;">Subjects</label>
                            <div class="row">
                            <?php foreach ($studentSubjects as $key => $row): ?>
                                <a href="javascript://" onclick="viewLectures('<?=$row['subject_title']?>', <?=$_SESSION['login_student']['student_class']?>)" style="font-size: 18px;">
                                    <div class="col-md-4 col-sm-4 col-6 col-xs-6" style="padding: 10px;">
                                        <div class="subject-div">
                                            <div><?=$row['subject_title']?></div>
                                        </div>
                                    </div>
                                </a>
                            <?php endforeach ?>
                            </div>
                    </div>
                </div>             
                <div class="col-md-9" id="lectures">
                        <label style="font-size: 20px;font-weight: bold;">Lectures</label>
                    <br>
                    <div class="form-group">
                        <input id="myInput" type="text" placeholder="Filter Lectures By Subject Name Or Title...." class="form-control" style="font-size: 20px;padding: 10px;">
                        <br>
                    </div>
                    <div>
                        <?php foreach ($studentLectures as $key => $row): ?>
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-5"> 
                                <iframe allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen" id="vid_frame" src="<?=$row['lecture_video']?>" frameborder="0" style="width: 100%;"></iframe>
                            </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-7 home-top-cour-desc">
                                <a href="javascript://">
                                    <h3><?=$row['lecture_title']?></h3>
                                </a>
                                <h4>Topic : <?=$row['lecture_topic']?></h4>
                                <p>Duration : <?=$row['lecture_duration']?></p> 
                                <span class="home-top-cour-rat" id="subject_name_filter">
                                    <?php foreach ($studentSubjects as $key => $row3): ?>
                                        <?php if ($row3['subject_id']==$row['subject_id']): ?>
                                            <?=$row3['subject_title']?>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </span>
                                <div class="hom-list-share">
                                    <ul>
                                        <?php foreach ($instructors as $key => $row2): ?>
                                            <?php if ($row['lecture_ins_id']==$row2['user_id']): ?>
                                            <li style="width: 50%;"><button style="width: 100%;" class="btn btn-primary btn-sm" href="javascript://"><i class="fa fa-graduation-cap" aria-hidden="true"></i> <?=$row2['user_firstname']." ".$row2['user_lastname']?></button> </li>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                        <li style="width: 50%;">
                                            <form action="<?=BASEURL?>quiz" method="POST">
                                                <input type="hidden" name="lecture_id" value="<?=$row['lecture_id']?>">
                                                <button style="width: 100%;" class="btn btn-success btn-sm" type="submit"><i class="fa fa-eye" aria-hidden="true"></i>Quiz</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>                       
                        <?php endforeach ?>
                    </div>
                    <div class="stu-lectures">
                        <div class="">
                            <!-- <div class="vid-container">
                                <iframe id="vid_frame" src="http://www.youtube.com/embed/eg6kNoJmzkY?rel=0&showinfo=0&autohide=1" frameborder="0" width="560" height="315"></iframe>
                            </div> -->

                            <!-- THE PLAYLIST -->
                            <!-- <div class="vid-list-container">
                                <div class="vid-list">
                                    
                                    <div class="vid-item" onClick="document.getElementById('vid_frame').src='http://youtube.com/embed/eg6kNoJmzkY?autoplay=1&rel=0&showinfo=0&autohide=1'">
                                      <div class="thumb"><img src="http://img.youtube.com/vi/eg6kNoJmzkY/0.jpg"></div>
                                      <div class="desc">Jessica Hernandez & the Deltas - Dead Brains</div>
                                    </div>
                                  
                                    <div class="vid-item" onClick="document.getElementById('vid_frame').src='http://youtube.com/embed/_Tz7KROhuAw?autoplay=1&rel=0&showinfo=0&autohide=1'">
                                      <div class="thumb"><img src="http://img.youtube.com/vi/_Tz7KROhuAw/0.jpg"></div>
                                      <div class="desc">Barbatuques - CD Tum P&aacute; - Sambalel&ecirc;</div>
                                    </div>

                                    <div class="vid-item" onClick="document.getElementById('vid_frame').src='http://youtube.com/embed/F1f-gn_mG8M?autoplay=1&rel=0&showinfo=0&autohide=1'">
                                      <div class="thumb"><img src="http://img.youtube.com/vi/F1f-gn_mG8M/0.jpg"></div>
                                      <div class="desc">Eleanor Turner plays Baroque Flamenco</div>
                                    </div>

                                    <div class="vid-item" onClick="document.getElementById('vid_frame').src='http://youtube.com/embed/fB8UTheTR7s?autoplay=1&rel=0&showinfo=0&autohide=1'">
                                      <div class="thumb"><img src="http://img.youtube.com/vi/fB8UTheTR7s/0.jpg"></div>
                                      <div class="desc">Sleepy Man Banjo Boys: Bluegrass</div>
                                    </div>

                                    <div class="vid-item" onClick="document.getElementById('vid_frame').src='http://youtube.com/embed/0SNhAKyXtC8?autoplay=1&rel=0&showinfo=0&autohide=1'">
                                      <div class="thumb"><img src="http://img.youtube.com/vi/0SNhAKyXtC8/0.jpg"></div>
                                      <div class="desc">Edmar Castaneda: NPR Music Tiny Desk Concert</div>
                                    </div>

                                    <div class="vid-item" onClick="document.getElementById('vid_frame').src='http://youtube.com/embed/RTHI_uGyfTM?autoplay=1&rel=0&showinfo=0&autohide=1'">
                                      <div class="thumb"><img src="http://img.youtube.com/vi/RTHI_uGyfTM/0.jpg"></div>
                                      <div class="desc">Winter Harp performs Caravan</div>
                                    </div>
                                  
                                    <div class="vid-item" onClick="document.getElementById('vid_frame').src='http://youtube.com/embed/abQRt6p8T7g?autoplay=1&rel=0&showinfo=0&autohide=1'">
                                      <div class="thumb"><img src="http://img.youtube.com/vi/abQRt6p8T7g/0.jpg"></div>
                                      <div class="desc">The Avett Brothers Tiny Desk Concert</div>
                                    </div>

                                    <div class="vid-item" onClick="document.getElementById('vid_frame').src='http://youtube.com/embed/fpmN9JorFew?autoplay=1&rel=0&showinfo=0&autohide=1'">
                                      <div class="thumb"><img src="http://img.youtube.com/vi/fpmN9JorFew/0.jpg"></div>
                                      <div class="desc">Tracy Chapman - Give Me One Reason</div>
                                    </div>

                                </div>
                            </div> -->

                            <!-- LEFT AND RIGHT ARROWS -->
                            <!-- <div class="arrows">
                                <div class="arrow-left"><i class="fa fa-chevron-left fa-lg"></i></div>
                                <div class="arrow-right"><i class="fa fa-chevron-right fa-lg"></i></div>
                            </div> -->

                        </div>
                    </div>
                </div>
                <div class="col-md-9" id="quizes">
                    <div class="udb-sec udb-cour-stat">
                        <h4><img src="<?=IMG?>icon/db3.png" alt="" /> Exams</h4>
                        <div class="pro-con-table">
                            <table class="bordered responsive-table">
                                <thead>
                                    <tr>
                                        <th>Exam #</th>
                                        <th>Instructor</th>
                                        <th>Subject</th>
                                        <th>Medium</th>
                                        <th>Duration</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($studentExams as $key => $row): ?>
                                        <tr>
                                            
                                            <td>#<?=$row['exam_id']?></td>
                                            <td>
                                                <?php foreach ($instructors as $key => $ins): ?>
                                                    <?php if ($row['ins_id']==$ins['user_id']): ?>
                                                         <?=$ins['user_firstname']."".$ins['user_lastname']?>
                                                     <?php endif ?> 
                                                <?php endforeach ?>
                                            </td>
                                            <td>
                                                <?php foreach ($studentSubjects as $key => $subject): ?>
                                                    <?php if ($row['subject_id']==$subject['subject_id']): ?>
                                                         <?=$subject['subject_title']?>
                                                     <?php endif ?> 
                                                <?php endforeach ?>
                                            </td>
                                            <td><?=$row['exam_medium']?></td>
                                            <td><?=$row['exam_time']." hours"?></td>
                                            <td><?=$row['exam_start_date']?></td>
                                            <td><?=$row['exam_start_time']?></td>
                                            <td>
                                                <form action="<?=BASEURL?>quiz/exam" method="POST">
                                                    <input type="hidden" name="exam_id" value="<?=$row['exam_id']?>">
                                                    <button type="submit" class="btn btn-success btn-sm">
                                                        Take
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>

                                    <?php endforeach ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-9" id="results">
                    <div class="udb-sec udb-cour-stat">
                        <div class="row">
                            <div class="col-md-6 col-sm-4 col-xs-6 col-6">
                                <div class="ed-course-in">
                                    <a class="course-overlay" href="javascript://" onclick="showQuizResults()">
                                        <img src="<?=IMG?>h-res.jpg" alt="">
                                        <span>Quiz Results</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-6 col-6">
                                <div class="ed-course-in">
                                    <a class="course-overlay" href="javascript://" onclick="showExamResults()">
                                        <img src="<?=IMG?>h-about.jpg" alt="">
                                        <span>Exam Results</span>
                                    </a>
                                </div>
                            </div>
                        </div>  
                        

                        <div class="table-responsive" id="examResults" style="display: none">
                            <br>
                            <h4><img src="<?=IMG?>icon/db3.png" alt="" /> Exams Results</h4>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="font-weight: bold;">Date</th>
                                        <th style="font-weight: bold;">Exam No</th>
                                        <th style="font-weight: bold;">Subject</th>
                                        <th style="font-weight: bold;">Instructor</th>
                                        <th style="font-weight: bold;">Total Marks</th>
                                        <th style="font-weight: bold;">Obtained Marks</th>
                                        <th style="font-weight: bold;">Correct</th>
                                        <th style="font-weight: bold;">Wrong</th>
                                    </tr>
                                </thead>
                                <?php $examSubject; ?>
                                <?php $examInstructor; ?>
                                <tbody>
                                    <?php foreach ($studentResults['examResults'] as $key => $row): ?>
                                    <tr>
                                        <td><?=$row['result_added']?></td>
                                        <td>
                                            <?php foreach ($studentExams as $key => $exam): ?>
                                                <?php if ($exam['exam_id']==$row['exam_id']): ?>
                                                    <?=$exam['exam_id']?> 
                                                    <?php $examSubject = $exam['subject_id'] ?>
                                                    <?php $examInstructor = $exam['ins_id'] ?>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </td>
                                        <td>
                                            <?php foreach ($studentSubjects as $key => $subject): ?>
                                                <?php if ($subject['subject_id']==$examSubject): ?>
                                                    <?=$subject['subject_title']?> 
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </td>
                                        <td>
                                            <?php foreach ($instructors as $key => $ins): ?>
                                                <?php if ($ins['user_id']==$examInstructor): ?>
                                                    <?=$ins['user_firstname']." ".$ins['user_lastname']?> 
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </td>
                                        <td><?=$row['total_marks']?></td>
                                        <td><?=$row['obtained_marks']?></td>
                                        <td><?=$row['correct_answers']?></td>
                                        <td><?=$row['wrong_answers']?></td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive" id="quizResults" style="display: none;">
                            <br>
                            <h4><img src="<?=IMG?>icon/db3.png" alt="" /> Quiz Results</h4>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="font-weight: bold;">Date</th>
                                        <th style="font-weight: bold;">Topic</th>
                                        <th style="font-weight: bold;">Subject</th>
                                        <th style="font-weight: bold;">Total Marks</th>
                                        <th style="font-weight: bold;">Obtained Marks</th>
                                        <th style="font-weight: bold;">Correct</th>
                                        <th style="font-weight: bold;">Wrong</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $lectureSubject; ?>
                                    <?php foreach ($studentResults['quizResults'] as $key => $row): ?>
                                    <tr>
                                        <td><?=$row['result_added']?></td>
                                        <td>
                                            <?php foreach ($studentLectures as $key => $lec): ?>
                                                <?php if ($lec['lecture_id']==$row['lecture_id']): ?>
                                                    <?=$lec['lecture_topic']?>
                                                    <?php $lectureSubject = $lec['subject_id'] ?> 
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </td>
                                        <td>
                                            <?php foreach ($studentSubjects as $key => $subject): ?>
                                                <?php if ($subject['subject_id']==$lectureSubject): ?>
                                                    <?=$subject['subject_title']?>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </td>
                                        <td><?=$row['total_marks']?></td>
                                        <td><?=$row['obtained_marks']?></td>
                                        <td><?=$row['correct_answers']?></td>
                                        <td><?=$row['wrong_answers']?></td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>  
        </div>
    </div>

    </section>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        showSubjects = () => {
            $('#dashboard').css('display', 'none');
            $('#lectures').css('display', 'none');
            $('#quizes').css('display', 'none');
            $('#results').css('display', 'none');
            $('#subjects').css('display', 'block');
        }
        showQuizResults = () => {
            $('#quizResults').css('display', 'block');
            $('#examResults').css('display', 'none');
        }
        showExamResults = () => {
            $('#quizResults').css('display', 'none');
            $('#examResults').css('display', 'block');
        }
        showResults = () => {
            $('#dashboard').css('display', 'none');
            $('#lectures').css('display', 'none');
            $('#quizes').css('display', 'none');
            $('#results').css('display', 'block');
            $('#subjects').css('display', 'none');
        }
        showQuizes = () => {
            $('#dashboard').css('display', 'none');
            $('#lectures').css('display', 'none');
            $('#quizes').css('display', 'block');
            $('#results').css('display', 'none');
            $('#subjects').css('display', 'none');
        }
        showLectures = () => {
            $('#dashboard').css('display', 'none');
            $('#lectures').css('display', 'block');
            $('#quizes').css('display', 'none');
            $('#results').css('display', 'none');
            $('#subjects').css('display', 'none');
        }
        showDashboard = () => {
            $('#dashboard').css('display', 'block');
            $('#lectures').css('display', 'none');
            $('#quizes').css('display', 'none');
            $('#results').css('display', 'none');
            $('#subjects').css('display', 'none');
        }
    </script>
    <!--SECTION END-->
    <script type="text/javascript">
        var $_GET = {};

        document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
            function decode(s) {
                return decodeURIComponent(s.split("+").join(" "));
            }

            $_GET[decode(arguments[1])] = decode(arguments[2]);
        });

        if($_GET['display']=='lectures'){
            showLectures();
        }else if($_GET['display']=='subjects'){
            showSubjects();
        }else if($_GET['display']=='exams'){
            showQuizes();
        }else if($_GET['display']=='results'){
            showResults();
        }
    </script>

    <script type="text/javascript">
        viewLectures = (subject, class_id) => { 
            $('#dashboard').css('display', 'none');
            $('#lectures').css('display', 'block');
            $('#quizes').css('display', 'none');
            $('#results').css('display', 'none');
            $('#subjects').css('display', 'none');
            $('#myInput').val(subject);
            $('#myInput').keyup();
        }



    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".arrow-right").bind("click", function (event) {
                event.preventDefault();
                $(".vid-list-container").stop().animate({
                    scrollLeft: "+=336"
                }, 750);
            });
            $(".arrow-left").bind("click", function (event) {
                event.preventDefault();
                $(".vid-list-container").stop().animate({
                    scrollLeft: "-=336"
                }, 750);
            });
            $(document).ready(function(){
              $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $(".home-top-cour, .home-top-cour-desc a").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
              });
            });

            $('.ytp-youtube-button').css('display', 'none');   
        });
    </script>

