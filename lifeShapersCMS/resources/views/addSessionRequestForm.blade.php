@include('includes.header')

   <div class="iq-navbar-header" style="height: 215px;">
      <div class="container-fluid iq-container">
         <div class="row">
            <div class="col-md-12">
               <div class="flex-wrap d-flex justify-content-between align-items-center">
                  <div>
                     <h1>
                        Life Shapers
                     </h1>
                     <p>Build Solid Success</p>
                  </div>
                  <div>
              
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="iq-header-img">
         <img src="/images/dashboard/top-header.png" alt="header"
            class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
         <img src="/images/dashboard/top-header1.png" alt="header"
            class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX">
         <img src="/images/dashboard/top-header2.png" alt="header"
            class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX">
         <img src="/images/dashboard/top-header3.png" alt="header"
            class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX">
         <img src="/images/dashboard/top-header4.png" alt="header"
            class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX">
         <img src="/images/dashboard/top-header5.png" alt="header"
            class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX">
      </div>
   </div> <!-- Nav Header Component End -->
   <!--Nav End-->
   </div>
   <div class="conatiner-fluid content-inner mt-n5 py-0">
      <div>
         <div class="row">
            <!-- <div class="col-xl-3 col-lg-4">
             <div class="card">
                <div class="card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">Add New User</h4>
                   </div>
                </div>
                <div class="card-body">
                   <form>
                      <div class="form-group">
                         <div class="profile-img-edit position-relative">
                            <img src="/images/avatars/01.png" alt="profile-pic" class="theme-color-default-img profile-pic rounded avatar-100">
                            <img src="/images/avatars/avtar_1.png" alt="profile-pic" class="theme-color-purple-img profile-pic rounded avatar-100">
                            <img src="/images/avatars/avtar_2.png" alt="profile-pic" class="theme-color-blue-img profile-pic rounded avatar-100">
                            <img src="/images/avatars/avtar_4.png" alt="profile-pic" class="theme-color-green-img profile-pic rounded avatar-100">
                            <img src="/images/avatars/avtar_5.png" alt="profile-pic" class="theme-color-yellow-img profile-pic rounded avatar-100">
                            <img src="/images/avatars/avtar_3.png" alt="profile-pic" class="theme-color-pink-img profile-pic rounded avatar-100">
                            <div class="upload-icone bg-primary">
                               <svg class="upload-button" width="14" height="14" viewBox="0 0 24 24">
                                  <path fill="#ffffff" d="M14.06,9L15,9.94L5.92,19H5V18.08L14.06,9M17.66,3C17.41,3 17.15,3.1 16.96,3.29L15.13,5.12L18.88,8.87L20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18.17,3.09 17.92,3 17.66,3M14.06,6.19L3,17.25V21H6.75L17.81,9.94L14.06,6.19Z" />
                               </svg>
                               <input class="file-upload" type="file" accept="image/*">
                            </div>
                         </div>
                         <div class="img-extension mt-3">
                            <div class="d-inline-block align-items-center">
                               <span>Only</span>
                               <a href="javascript:void();">.jpg</a>
                               <a href="javascript:void();">.png</a>
                               <a href="javascript:void();">.jpeg</a>
                               <span>allowed</span>
                            </div>
                         </div>
                      </div>
                      <div class="form-group">
                         <label class="form-label">User Role:</label>
                         <select name="type" class="selectpicker form-control" data-style="py-0">
                            <option>Select</option>
                            <option>Web Designer</option>
                            <option>Web Developer</option>
                            <option>Tester</option>
                            <option>Php Developer</option>
                            <option>Ios Developer </option>
                         </select>
                      </div>
                      <div class="form-group">
                         <label class="form-label" for="furl">Facebook Url:</label>
                         <input type="text" class="form-control" id="furl" placeholder="Facebook Url">
                      </div>
                      <div class="form-group">
                         <label class="form-label" for="turl">Twitter Url:</label>
                         <input type="text" class="form-control" id="turl" placeholder="Twitter Url">
                      </div>
                      <div class="form-group">
                         <label class="form-label" for="instaurl">Instagram Url:</label>
                         <input type="text" class="form-control" id="instaurl" placeholder="Instagram Url">
                      </div>
                      <div class="form-group mb-0">
                         <label class="form-label" for="lurl">Linkedin Url:</label>
                         <input type="text" class="form-control" id="lurl" placeholder="Linkedin Url">
                      </div>
                   </form>
                </div>
             </div>
          </div> -->
            <div class="container-fluid">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">New Session Request</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="new-user-info">
                        <form action="/add-new-session-request" method="POST" id="sessionRequest">
                           <div class="row">
                                 <div class="form-group col-md-6">
                                    <label class="form-label" for="fname">Mobile Number</label>
                                    <input name="mobile" type="text" autocomplete="off" list="datalistOptions"
                                       class="form-control" id="mobile" placeholder="Mobile Number">
                                    <datalist id="datalistOptions">
                                      @foreach ($contactList as $contact)
                                      <option value="{{ $contact['f_name'] . ' ' . $contact['l_name'] . ' - ' . $contact['mobile'] }}">
                                          {{$contact['f_name'] }} {{ $contact['l_name'] }} - {{ $contact['mobile'] }}
                                      </option>
                                  @endforeach
   
                                    </datalist>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <button class="btn btn-primary" id="fetch-btn">Fetch</button>
                                    <button type="button" class="btn btn-secondary" id="clearBtn">Clear</button>
                                 </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="add1">First Name:</label>
                                 <input type="text" name="fName" class="form-control" id="fName" readonly
                                    placeholder="First Name">
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="add2">Last Name:</label>
                                 <input name="lName" type="text" class="form-control" id="lName" readonly
                                    placeholder="Last Name">
                              </div>
                              <!-- <div class="form-group col-md-12">
                               <label class="form-label" for="cname">Company Name:</label>
                               <input  type="text" class="form-control" id="cname" placeholder="Company Name">
                            </div> -->
                              <div class="form-group col-sm-6">
                                 <label class="form-label">Stauts:</label>
                                 <select name="status" class="selectpicker form-control" data-style="py-0">
                                    <option>Select Satus</option>
                                    <option>First Visit</option>
                                    <option>Re-Visit</option>

                                 </select>
                              </div>
                              <div class="form-group col-sm-6">
                                 <label class="form-label">Request Recieved Mode:</label>
                                 <select name="reqRcd" class="selectpicker form-control" data-style="py-0">
                                    <option>Select Satus</option>
                                    <option>Call</option>
                                    <option>Whats App</option>
                                    <option>Website</option>
                                 </select>
                              </div>
                              <div class="form-group col-sm-12">
                                 <p>Purpose:</p>
                                 <input name="purpose" class="form-check-input" type="checkbox" value="career"
                                    id="flexCheckDefault">
                                 <label class="form-check-label" for="flexCheckDefault">
                                    Career
                                 </label>
                                 <input name="purpose" class="form-check-input" type="checkbox" value="business"
                                    id="flexCheckChecked">
                                 <label class="form-check-label" for="flexCheckChecked">
                                    Business
                                 </label>
                                 <input name="purpose" class="form-check-input" type="checkbox" value="relationships"
                                    id="flexCheckChecked">
                                 <label class="form-check-label" for="flexCheckChecked">
                                    Relationships
                                 </label>
                                 <input name="purpose" class="form-check-input" type="checkbox" value="leadership"
                                    id="flexCheckChecked">
                                 <label class="form-check-label" for="flexCheckChecked">
                                    Leadership
                                 </label>
                                 <input name="purpose" class="form-check-input" type="checkbox" value="life"
                                    id="flexCheckChecked">
                                 <label class="form-check-label" for="flexCheckChecked">
                                    Life
                                 </label>
                              </div>

                              <div class="form-group col-sm-6">
                                 <label class="form-label">Duration:</label>
                                 <select name="duration" class="selectpicker form-control" data-style="py-0">
                                    <option>Select Duration</option>
                                    <option>
                                       <=30 MIN</option>
                                    <option>
                                       <=3 HRS</option>
                                    <option>
                                       <=6 HRS</option>
                                    <option>>=6 HRS</option>
                                 </select>
                              </div>
                              <div class="form-group col-sm-6">
                                 <label class="form-label">Participation:</label>
                                 <select name="participation" class="selectpicker form-control" data-style="py-0">
                                    <option>Select Participation</option>
                                    <option>Self</option>
                                    <option>Couple</option>
                                    <option>Family</option>
                                    <option>Work-Teams</option>
                                 </select>
                              </div>
                              <!-- <div class="form-group col-md-6">
                               <label class="form-label" for="mobno">Mobile Number:</label>
                               <input type="text" class="form-control" id="mobno" placeholder="Mobile Number">
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="altconno">Alternate Contact:</label>
                               <input type="text" class="form-control" id="altconno" placeholder="Alternate Contact">
                            </div> -->
                              <!-- <div class="form-group col-md-6">
                               <label class="form-label" for="email">Email:</label>
                               <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="pno">Pin Code:</label>
                               <input type="text" class="form-control" id="pno" placeholder="Pin Code">
                            </div>
                            <div class="form-group col-md-12">
                               <label class="form-label" for="city">Town/City:</label>
                               <input type="text" class="form-control" id="city" placeholder="Town/City">
                            </div> -->
                           </div>
                           <hr>
                           <h5 class="mb-3">Tentatively Appointment Is Desired Around</h5>
                           <div class="row">
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="uname">Appointment Date</label>
                                 <input name="appointmentDate" type="date" class="form-control" id="uname"
                                    placeholder="User Name">
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="pass">Mode:</label>
                                 <select name="mode" class="selectpicker form-control" data-style="py-0">
                                    <option>Select Mode</option>
                                    <option>Meet</option>
                                    <option>Call</option>
                                    <option>Outdooor</option>

                                 </select>
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="pass">Start Time:</label>
                                 <input name="startTime" type="time" class="form-control" id="pass"
                                    placeholder="Password">
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="rpass">End Time:</label>
                                 <input name="endTime" type="time" class="form-control" id="rpass"
                                    placeholder="Repeat Password ">
                              </div>
                           </div>
                           <input id="contactId" name="contactId" type="hidden" value="">
                           <button type="submit" class="btn btn-primary">Add New Request</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   
   <!-- Footer Section Start -->
   <footer class="footer">
      <div class="footer-body">
         <div></div>
         <div class="right-panel">
            ©
            <script>document.write(new Date().getFullYear())</script> Life Shapers, Made with
            <span class="text-gray">
               <svg width="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                     d="M15.85 2.50065C16.481 2.50065 17.111 2.58965 17.71 2.79065C21.401 3.99065 22.731 8.04065 21.62 11.5806C20.99 13.3896 19.96 15.0406 18.611 16.3896C16.68 18.2596 14.561 19.9196 12.28 21.3496L12.03 21.5006L11.77 21.3396C9.48102 19.9196 7.35002 18.2596 5.40102 16.3796C4.06102 15.0306 3.03002 13.3896 2.39002 11.5806C1.26002 8.04065 2.59002 3.99065 6.32102 2.76965C6.61102 2.66965 6.91002 2.59965 7.21002 2.56065H7.33002C7.61102 2.51965 7.89002 2.50065 8.17002 2.50065H8.28002C8.91002 2.51965 9.52002 2.62965 10.111 2.83065H10.17C10.21 2.84965 10.24 2.87065 10.26 2.88965C10.481 2.96065 10.69 3.04065 10.89 3.15065L11.27 3.32065C11.3618 3.36962 11.4649 3.44445 11.554 3.50912C11.6104 3.55009 11.6612 3.58699 11.7 3.61065C11.7163 3.62028 11.7329 3.62996 11.7496 3.63972C11.8354 3.68977 11.9247 3.74191 12 3.79965C13.111 2.95065 14.46 2.49065 15.85 2.50065ZM18.51 9.70065C18.92 9.68965 19.27 9.36065 19.3 8.93965V8.82065C19.33 7.41965 18.481 6.15065 17.19 5.66065C16.78 5.51965 16.33 5.74065 16.18 6.16065C16.04 6.58065 16.26 7.04065 16.68 7.18965C17.321 7.42965 17.75 8.06065 17.75 8.75965V8.79065C17.731 9.01965 17.8 9.24065 17.94 9.41065C18.08 9.58065 18.29 9.67965 18.51 9.70065Z"
                     fill="currentColor"></path>
               </svg>
            </span> by <a href="">Elite Coders</a>.
         </div>
      </div>
   </footer>
   <!-- Footer Section End -->
   </main>
   <a class="btn btn-fixed-end btn-warning btn-icon btn-setting" data-bs-toggle="offcanvas"
      data-bs-target="#offcanvasExample" role="button" aria-controls="offcanvasExample">
      <svg width="24" viewBox="0 0 24 24" class="animated-rotate" fill="none" xmlns="http://www.w3.org/2000/svg">
         <path fill-rule="evenodd" clip-rule="evenodd"
            d="M20.8064 7.62361L20.184 6.54352C19.6574 5.6296 18.4905 5.31432 17.5753 5.83872V5.83872C17.1397 6.09534 16.6198 6.16815 16.1305 6.04109C15.6411 5.91402 15.2224 5.59752 14.9666 5.16137C14.8021 4.88415 14.7137 4.56839 14.7103 4.24604V4.24604C14.7251 3.72922 14.5302 3.2284 14.1698 2.85767C13.8094 2.48694 13.3143 2.27786 12.7973 2.27808H11.5433C11.0367 2.27807 10.5511 2.47991 10.1938 2.83895C9.83644 3.19798 9.63693 3.68459 9.63937 4.19112V4.19112C9.62435 5.23693 8.77224 6.07681 7.72632 6.0767C7.40397 6.07336 7.08821 5.98494 6.81099 5.82041V5.82041C5.89582 5.29601 4.72887 5.61129 4.20229 6.52522L3.5341 7.62361C3.00817 8.53639 3.31916 9.70261 4.22975 10.2323V10.2323C4.82166 10.574 5.18629 11.2056 5.18629 11.8891C5.18629 12.5725 4.82166 13.2041 4.22975 13.5458V13.5458C3.32031 14.0719 3.00898 15.2353 3.5341 16.1454V16.1454L4.16568 17.2346C4.4124 17.6798 4.82636 18.0083 5.31595 18.1474C5.80554 18.2866 6.3304 18.2249 6.77438 17.976V17.976C7.21084 17.7213 7.73094 17.6516 8.2191 17.7822C8.70725 17.9128 9.12299 18.233 9.37392 18.6717C9.53845 18.9489 9.62686 19.2646 9.63021 19.587V19.587C9.63021 20.6435 10.4867 21.5 11.5433 21.5H12.7973C13.8502 21.5001 14.7053 20.6491 14.7103 19.5962V19.5962C14.7079 19.088 14.9086 18.6 15.2679 18.2407C15.6272 17.8814 16.1152 17.6807 16.6233 17.6831C16.9449 17.6917 17.2594 17.7798 17.5387 17.9394V17.9394C18.4515 18.4653 19.6177 18.1544 20.1474 17.2438V17.2438L20.8064 16.1454C21.0615 15.7075 21.1315 15.186 21.001 14.6964C20.8704 14.2067 20.55 13.7894 20.1108 13.5367V13.5367C19.6715 13.284 19.3511 12.8666 19.2206 12.3769C19.09 11.8873 19.16 11.3658 19.4151 10.928C19.581 10.6383 19.8211 10.3982 20.1108 10.2323V10.2323C21.0159 9.70289 21.3262 8.54349 20.8064 7.63277V7.63277V7.62361Z"
            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
         <circle cx="12.1747" cy="11.8891" r="2.63616" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
            stroke-linejoin="round"></circle>
      </svg>
   </a>
   <!-- Wrapper End-->
   <!-- offcanvas start -->
   <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" data-bs-scroll="true"
      data-bs-backdrop="true" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
         <div class="d-flex align-items-center">
            <h3 class="offcanvas-title me-3" id="offcanvasExampleLabel">Settings</h3>
         </div>
         <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body data-scrollbar">
         <div class="row">
            <div class="col-lg-12">
               <h5 class="mb-3">Scheme</h5>
               <div class="d-grid gap-x-3 grid-cols-3 mb-4">
                  <div class="btn-border" data-setting="color-mode" data-name="color" data-value="auto">
                     <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor" d="M7,2V13H10V22L17,10H13L17,2H7Z" />
                     </svg>
                     <span class="ms-2 "> Auto </span>
                  </div>
                  <div class="btn-border" data-setting="color-mode" data-name="color" data-value="dark">
                     <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor"
                           d="M9,2C7.95,2 6.95,2.16 6,2.46C10.06,3.73 13,7.5 13,12C13,16.5 10.06,20.27 6,21.54C6.95,21.84 7.95,22 9,22A10,10 0 0,0 19,12A10,10 0 0,0 9,2Z" />
                     </svg>
                     <span class="ms-2 "> Dark </span>
                  </div>
                  <div class="btn-border active" data-setting="color-mode" data-name="color" data-value="light">
                     <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor"
                           d="M12,8A4,4 0 0,0 8,12A4,4 0 0,0 12,16A4,4 0 0,0 16,12A4,4 0 0,0 12,8M12,18A6,6 0 0,1 6,12A6,6 0 0,1 12,6A6,6 0 0,1 18,12A6,6 0 0,1 12,18M20,8.69V4H15.31L12,0.69L8.69,4H4V8.69L0.69,12L4,15.31V20H8.69L12,23.31L15.31,20H20V15.31L23.31,12L20,8.69Z" />
                     </svg>
                     <span class="ms-2 "> Light</span>
                  </div>
               </div>
               <hr class="hr-horizontal">
               <div class="d-flex align-items-center justify-content-between">
                  <h5 class="mt-4 mb-3">Color Customizer</h5>
                  <button class="btn btn-transparent p-0" data-value="theme-color-default" data-info="#079aa2"
                     data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip" data-bs-placement="top"
                     title="" data-bs-original-title="Default">
                     <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M21.4799 12.2424C21.7557 12.2326 21.9886 12.4482 21.9852 12.7241C21.9595 14.8075 21.2975 16.8392 20.0799 18.5506C18.7652 20.3986 16.8748 21.7718 14.6964 22.4612C12.518 23.1505 10.1711 23.1183 8.01299 22.3694C5.85488 21.6205 4.00382 20.196 2.74167 18.3126C1.47952 16.4293 0.875433 14.1905 1.02139 11.937C1.16734 9.68346 2.05534 7.53876 3.55018 5.82945C5.04501 4.12014 7.06478 2.93987 9.30193 2.46835C11.5391 1.99683 13.8711 2.2599 15.9428 3.2175L16.7558 1.91838C16.9822 1.55679 17.5282 1.62643 17.6565 2.03324L18.8635 5.85986C18.945 6.11851 18.8055 6.39505 18.549 6.48314L14.6564 7.82007C14.2314 7.96603 13.8445 7.52091 14.0483 7.12042L14.6828 5.87345C13.1977 5.18699 11.526 4.9984 9.92231 5.33642C8.31859 5.67443 6.8707 6.52052 5.79911 7.74586C4.72753 8.97119 4.09095 10.5086 3.98633 12.1241C3.8817 13.7395 4.31474 15.3445 5.21953 16.6945C6.12431 18.0446 7.45126 19.0658 8.99832 19.6027C10.5454 20.1395 12.2278 20.1626 13.7894 19.6684C15.351 19.1743 16.7062 18.1899 17.6486 16.8652C18.4937 15.6773 18.9654 14.2742 19.0113 12.8307C19.0201 12.5545 19.2341 12.3223 19.5103 12.3125L21.4799 12.2424Z"
                           fill="#31BAF1" />
                        <path
                           d="M20.0941 18.5594C21.3117 16.848 21.9736 14.8163 21.9993 12.7329C22.0027 12.4569 21.7699 12.2413 21.4941 12.2512L19.5244 12.3213C19.2482 12.3311 19.0342 12.5633 19.0254 12.8395C18.9796 14.283 18.5078 15.6861 17.6628 16.8739C16.7203 18.1986 15.3651 19.183 13.8035 19.6772C12.2419 20.1714 10.5595 20.1483 9.01246 19.6114C7.4654 19.0746 6.13845 18.0534 5.23367 16.7033C4.66562 15.8557 4.28352 14.9076 4.10367 13.9196C4.00935 18.0934 6.49194 21.37 10.008 22.6416C10.697 22.8908 11.4336 22.9852 12.1652 22.9465C13.075 22.8983 13.8508 22.742 14.7105 22.4699C16.8889 21.7805 18.7794 20.4073 20.0941 18.5594Z"
                           fill="#0169CA" />
                     </svg>
                  </button>
               </div>
               <div class="grid-cols-5 mb-4 d-grid gap-x-2">
                  <div class="btn-border" data-value="theme-color-blue" data-info="#573BFF" data-setting="color-mode1"
                     data-name="color" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                     data-bs-original-title="Theme-1">
                     <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32"
                        height="32">
                        <circle cx="12" cy="12" r="10" fill="#00C3F9" />
                        <path d="M2,12 a1,1 1 1,0 20,0" fill="#573BFF" />
                     </svg>
                  </div>
                  <div class="btn-border" data-value="theme-color-gray" data-info="#FD8D00" data-setting="color-mode1"
                     data-name="color" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                     data-bs-original-title="Theme-2">
                     <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32"
                        height="32">
                        <circle cx="12" cy="12" r="10" fill="#91969E" />
                        <path d="M2,12 a1,1 1 1,0 20,0" fill="#FD8D00" />
                     </svg>
                  </div>
                  <div class="btn-border" data-value="theme-color-red" data-info="#366AF0" data-setting="color-mode1"
                     data-name="color" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                     data-bs-original-title="Theme-3">
                     <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32"
                        height="32">
                        <circle cx="12" cy="12" r="10" fill="#DB5363" />
                        <path d="M2,12 a1,1 1 1,0 20,0" fill="#366AF0" />
                     </svg>
                  </div>
                  <div class="btn-border" data-value="theme-color-yellow" data-info="#6410F1" data-setting="color-mode1"
                     data-name="color" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                     data-bs-original-title="Theme-4">
                     <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32"
                        height="32">
                        <circle cx="12" cy="12" r="10" fill="#EA6A12" />
                        <path d="M2,12 a1,1 1 1,0 20,0" fill="#6410F1" />
                     </svg>
                  </div>
                  <div class="btn-border" data-value="theme-color-pink" data-info="#25C799" data-setting="color-mode1"
                     data-name="color" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                     data-bs-original-title="Theme-5">
                     <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32"
                        height="32">
                        <circle cx="12" cy="12" r="10" fill="#E586B3" />
                        <path d="M2,12 a1,1 1 1,0 20,0" fill="#25C799" />
                     </svg>
                  </div>

               </div>
               <hr class="hr-horizontal">
               <h5 class="mb-3 mt-4">Scheme Direction</h5>
               <div class="d-grid gap-x-3 grid-cols-2 mb-4">
                  <div class="text-center">
                     <img src="/images/settings/dark/01.png" alt="ltr"
                        class="mode dark-img img-fluid btn-border p-0 flex-column active" data-setting="dir-mode"
                        data-name="dir" data-value="ltr">
                     <img src="/images/settings/light/01.png" alt="ltr"
                        class="mode light-img img-fluid btn-border p-0 flex-column active" data-setting="dir-mode"
                        data-name="dir" data-value="ltr">
                     <span class=" mt-2"> LTR </span>
                  </div>
                  <div class="text-center">
                     <img src="/images/settings/dark/02.png" alt=""
                        class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="dir-mode"
                        data-name="dir" data-value="rtl">
                     <img src="/images/settings/light/02.png" alt=""
                        class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="dir-mode"
                        data-name="dir" data-value="rtl">
                     <span class="mt-2 "> RTL </span>
                  </div>
               </div>
               <hr class="hr-horizontal">
               <h5 class="mt-4 mb-3">Sidebar Color</h5>
               <div class="d-grid gap-x-3 grid-cols-2 mb-4">
                  <div class="btn btn-border mb-4" data-setting="sidebar" data-name="sidebar-color"
                     data-value="sidebar-dark">
                     <i class="text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="currentColor">
                           <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                        </svg>
                     </i>
                     <span class="ms-2 "> Dark </span>
                  </div>
                  <div class="btn btn-border mb-4" data-setting="sidebar" data-name="sidebar-color"
                     data-value="sidebar-color">
                     <i class="text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="currentColor">
                           <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                        </svg>
                     </i>
                     <span class="ms-2 "> Color </span>
                  </div>
                  <div class="btn btn-border active" data-setting="sidebar" data-name="sidebar-color"
                     data-value="sidebar-white">
                     <i class="text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="currentColor">
                           <circle cx="12" cy="12" r="8" fill="currentColor" stroke="black" stroke-width="3"></circle>
                        </svg>
                     </i>
                     <span class="ms-2 "> White </span>
                  </div>
                  <div class="btn btn-border " data-setting="sidebar" data-name="sidebar-color"
                     data-value="sidebar-transparent">
                     <i class="text-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="currentColor">
                           <circle cx="12" cy="12" r="8" fill="#F5F6FA" stroke="black" stroke-width="3"></circle>
                        </svg>
                     </i>
                     <span class="ms-2 "> Transparent </span>
                  </div>
               </div>
               <hr class="hr-horizontal">
               <h5 class="mt-4 mb-3">Sidebar Types</h5>
               <div class="d-grid gap-x-3 grid-cols-3 mb-4">
                  <div class="text-center">
                     <img src="/images/settings/dark/03.png" alt="mini"
                        class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar"
                        data-name="sidebar-type" data-value="sidebar-mini">
                     <img src="/images/settings/light/03.png" alt="mini"
                        class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar"
                        data-name="sidebar-type" data-value="sidebar-mini">
                     <span class="mt-2">Mini</span>
                  </div>
                  <div class="text-center">
                     <img src="/images/settings/dark/04.png" alt="hover"
                        class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar"
                        data-name="sidebar-type" data-value="sidebar-hover" data-extra-value="sidebar-mini">
                     <img src="/images/settings/light/04.png" alt="hover"
                        class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar"
                        data-name="sidebar-type" data-value="sidebar-hover" data-extra-value="sidebar-mini">
                     <span class="mt-2">Hover</span>
                  </div>
                  <div class="text-center">
                     <img src="/images/settings/dark/05.png" alt="boxed"
                        class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar"
                        data-name="sidebar-type" data-value="sidebar-boxed">
                     <img src="/images/settings/light/05.png" alt="boxed"
                        class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar"
                        data-name="sidebar-type" data-value="sidebar-boxed">
                     <span class="mt-2">Boxed</span>
                  </div>
               </div>
               <hr class="hr-horizontal">
               <h5 class="mt-4 mb-3">Sidebar Active Style</h5>
               <div class="d-grid gap-x-3 grid-cols-2 mb-4">
                  <div class="mb-4 text-center">
                     <img src="/images/settings/dark/06.png" alt="rounded-one-side"
                        class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar"
                        data-name="sidebar-item" data-value="navs-rounded">
                     <img src="/images/settings/light/06.png" alt="rounded-one-side"
                        class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar"
                        data-name="sidebar-item" data-value="navs-rounded">
                     <span class="mt-2">Rounded One Side</span>
                  </div>
                  <div class="mb-4 text-center">
                     <img src="/images/settings/dark/07.png" alt="rounded-all"
                        class="mode dark-img img-fluid btn-border p-0 flex-column active" data-setting="sidebar"
                        data-name="sidebar-item" data-value="navs-rounded-all">
                     <img src="/images/settings/light/07.png" alt="rounded-all"
                        class="mode light-img img-fluid btn-border p-0 flex-column active" data-setting="sidebar"
                        data-name="sidebar-item" data-value="navs-rounded-all">
                     <span class="mt-2">Rounded All</span>
                  </div>
                  <div class="mb-4 text-center">
                     <img src="/images/settings/dark/08.png" alt="pill-one-side"
                        class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar"
                        data-name="sidebar-item" data-value="navs-pill">
                     <img src="/images/settings/light/09.png" alt="pill-one-side"
                        class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar"
                        data-name="sidebar-item" data-value="navs-pill">
                     <span class="mt-2">Pill One Side</span>
                  </div>
                  <div class="mb-4 text-center">
                     <img src="/images/settings/dark/09.png" alt="pill-all"
                        class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar"
                        data-name="sidebar-item" data-value="navs-pill-all">
                     <img src="/images/settings/light/08.png" alt="pill-all"
                        class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar"
                        data-name="sidebar-item" data-value="navs-pill-all">
                     <span class="mt-2">Pill All</span>
                  </div>
               </div>
               <hr class="hr-horizontal">
               <h5 class="mt-4 mb-3">Navbar Style</h5>
               <div class="d-grid gap-x-3 grid-cols-2">
                  <div class="mb-4 text-center">
                     <img src="/images/settings/dark/11.png" alt="image"
                        class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="navbar"
                        data-target=".iq-navbar" data-name="navbar-type" data-value="nav-glass">
                     <img src="/images/settings/light/10.png" alt="image"
                        class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="navbar"
                        data-target=".iq-navbar" data-name="navbar-type" data-value="nav-glass">
                     <span class="mt-2">Glass</span>
                  </div>
                  <div class="mb-4 text-center">
                     <img src="/images/settings/dark/10.png" alt="color"
                        class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="navbar"
                        data-target=".iq-navbar-header" data-name="navbar-type" data-value="navs-bg-color">
                     <img src="/images/settings/light/11.png" alt="color"
                        class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="navbar"
                        data-target=".iq-navbar-header" data-name="navbar-type" data-value="navs-bg-color">
                     <span class="mt-2">Color</span>
                  </div>
                  <div class="mb-4 text-center">
                     <img src="/images/settings/dark/12.png" alt="sticky"
                        class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="navbar"
                        data-target=".iq-navbar" data-name="navbar-type" data-value="navs-sticky">
                     <img src="/images/settings/light/12.png" alt="sticky"
                        class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="navbar"
                        data-target=".iq-navbar" data-name="navbar-type" data-value="navs-sticky">
                     <span class="mt-2">Sticky</span>
                  </div>
                  <div class="mb-4 text-center">
                     <img src="/images/settings/dark/13.png" alt="transparent"
                        class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="navbar"
                        data-target=".iq-navbar" data-name="navbar-type" data-value="navs-transparent">
                     <img src="/images/settings/light/13.png" alt="transparent"
                        class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="navbar"
                        data-target=".iq-navbar" data-name="navbar-type" data-value="navs-transparent">
                     <span class="mt-2">Transparent</span>
                  </div>
                  <div class="btn btn-border active col-span-full" data-setting="navbar" data-name="navbar-default"
                     data-value="default">
                     <i class="text-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="currentColor">
                           <circle cx="12" cy="12" r="8" fill="#F5F6FA" stroke="black" stroke-width="3"></circle>
                        </svg>
                     </i>
                     <span class="ms-2 "> Default Navbar</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <script>
      let mobileField = document.querySelector('#mobile')
      document.querySelector('#fetch-btn').addEventListener("click", async (e) => {
         e.preventDefault()
         let mobNum = mobileField.value.split('-')[1].trim()
         mobileField.value = mobNum
         let response = await fetch(`/getContactByMobileNumber/${mobNum}`)
         let contactDoc = await response.json()

         //    console.log(response)
         let fName = document.querySelector('#fName')
         let lName = document.querySelector('#lName')
         let contactField = document.querySelector('#contactId')
         if (contactDoc) {
            fName.value = contactDoc.fName
            lName.value = contactDoc.lName
            contactField.value = contactDoc._id

         } else {
            fName.value = ""
            lName.value = ""
         }

         // alert(response.data)
      })

   </script>

@include('includes.footer')
