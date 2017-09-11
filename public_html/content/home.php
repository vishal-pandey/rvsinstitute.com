<div class="container-fluid">

<!-- Home Row Strats Here -->
    <div class="row first-row">
      <div class="col-xs-12">
        <div class="container">
          <div class="row">
            <div class="director">
              <div class="col-sm-3">
              	<marquee direction="up" scrollamount="2" height="300">
                    <ul style="margin:0;padding:0;">
                        <?php
                          $sql = "select * from notice";
                          $result = $conn->query($sql);
                          while($row = $result->fetch_assoc()){
                            echo '<a href="./notice.php?content='.$row['id'].'" target="_blank"><li>'.$row['title'].'</li></a>';
                          }
                        ?>
                    </ul>
                </marquee>
              </div>
              <div class="col-sm-6">
                <h3 style="margin-top:0;padding-top:0;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Director&apos;s Message</h3>
                <p class="text-justify">I feel an immense pleasure in welcoming the students on behalf of all the members of RVS Institute, Delhi to the prominent Institution. The institute has a standing of over 8 years, 6 years as Institute of Adroit Students and 2 years as RVS Institute. The institute was set up in 2009 as Institute of Adroit Students and renamed as RVS Institute in 2015.</p>
                <p class="text-justify">In few past years, education system has evolved to provide education using modern tools and new technology system for rapid evolution of thinking and understanding ability of the students.</p>
                <p class="text-justify">This system is known for providing quality training and coaching in the area of academic education and information technology. It provides the best study environment conducive to creative and innovative thinking of the students. The institute has well qualified faculties who believe in continuous development and enhancement of teaching qualities and hence they spend hours to develop new and creative method of teaching. The Research and development in the area of teaching helps us maintain our unique and reputed position in the field of academic and professional training and coaching.</p>
                <a href="./about.php?content=from-md"><div class="btn btn-sm btn-default pull-right">Read More</div></a>
              </div>
              <div class="col-sm-3">
                  <img class="img-responsive" src="assets/images/rvsir.png" alt="UPSC English" />
                  <h4>Mr. Ranvijay Pal</h4>
                  <footer>The Director<br /><?php echo CompanyName.'&comma; '.StateName; ?></footer>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="space-row2">
      </div>
    </div>
<!-- Home Row Ends Here -->
<!-- First Row Strats Here -->
    <div class="row first-row">
      <div class="col-xs-12">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h2>Courses Available at Our Institute</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <img class="icon" src="assets/images/academic.png" alt="Academic Courses" />
              <h3>Academic Course</h3>
              <p>We run specialised academic batches for C.B.S.E. Examinations. Our batches are fully devoted and concentrated to the students of C.B.S.E Examination. However, we cover every single concept covered under C.B.S.E and ISCE/ISC Board. Under our Academic Course we offer two courses i.e. Secondary and Senior Secondary. Under Secondary ...</p><p><a href="course.php?content=course-academic">Read More</a></p>
            </div>
            <div class="col-sm-4" style="border-left:2px #888 solid;border-right:2px #888 solid;">
              <img class="icon" src="assets/images/computer.png" alt="Computer Courses" />
              <h3>Computer Courses</h3>
              <p>We also offer to our students very important courses under our computer courses. Having special technical and professional teachers for computer courses, we have been able to conduct batches for computer classes for most important courses which were in highly demand from the students. With new year 2017, we have added in our course ...</p><p><a href="./course.php?content=course-computer">Read More</a></p>
            </div>
            <div class="col-sm-4">
              <img class="icon" src="assets/images/brain.png" alt="Competitive Courses" />
              <h3>Competitive Courses</h3>
              <p>In competitive courses, we have three categories. Under first category, we are offering special batches for Mathematics Fundamentals and Advance Mathematics. This course is very important for the students preparing fo competitive exams such as S.S.C, Banks, Railway, and many more. Under Second category, this institute provides English ...</p><p><a href="./course.php?content=course-competitive">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="space-row2">
      </div>
    </div>
<!-- First Row Ends Here -->
<!-- Second Row Strats Here -->
    <div class="row first-row">
      <div class="col-xs-12">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h2>The Great Features of the Institute</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <img class="icon" src="assets/images/teacher.png" alt="Specialised Teacher" />
              <h3>Specialised Subject Teachers</h3>
              <p>The teachers of the institute are well qualified and specialised in their subject of teaching. Having years of experience and expertised knowledge&#44; they apply their unique techniques to make the study a very interesting thing for you.</p>
            </div>
            <div class="col-sm-4" style="border-left:2px #888 solid;border-right:2px #888 solid;">
              <img class="icon" src="assets/images/material.png" alt="SSC Mathematics" />
              <h3>Important Study Material</h3>
              <p>We provide our students the important study material. The study material includes study notes, assignments, test papers, previous year question paper etc. which are very useful for students. Our study material covers all kinds of conceptual and expected questions.</p>
            </div>
            <div class="col-sm-4">
              <img class="icon" src="assets/images/multimedia.png" alt="Academic" />
              <h3>Multimedia Projection</h3>
              <p>We are equipped with latest technological tools of education. One of them is our multimedia projection class. We use emultimedia projection to simplify many conceptual studies and save the precious time of the students from wasting aimlessly.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="space-row3">
      </div>
    </div>
    <!-- Social Media Row Strats Here -->
    <div class="row fifth-row">
      <div class="col-xs-12">
        <div class="container">
          <div class="row">
            <h2>Let&apos;s be social&#33;</h2>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <a href="<?php echo FacebookLink; ?>" title="Facebook - <?php echo CompanyName; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a href="<?php echo TwitterLink; ?>" title="Twitter - <?php echo CompanyName; ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="<?php echo GoogleLink; ?>" title="Google Plus - <?php echo CompanyName; ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
              <a href="<?php echo YoutubeLink; ?>" title="Youtube - <?php echo CompanyName; ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>   
  </div>
