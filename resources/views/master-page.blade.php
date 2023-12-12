@extends('layout.master')
@section('title')
    {{ __('RAV') }}
@endsection
@section('content')
<section class="wrapper banner-wrapper">
         <div id="flexSlider" class="flexslider bigbanner">
            <div class="inner-banner-text">
               <div class="text-banner-content" >
                  <h2 >
                     About Us
                  </h2>
               </div>
            </div>
         </div>
      </section>
      <div class="bg-wrapper inner-wrapper">
         <div class="breadcam-bg breadcam">
            <div class="container common-container four_content ">
               <ul>
                  <li><a href="{{ route('/') }}">Home </a></li>

                  <li>Master Page</li>

               </ul>
            </div>
         </div>
      </div>
       <div class="wrapper" id="skipCont"></div>
      <div class="sidebar-main-nav ptb-50">
         <div class="container common-container pr-0">
         <!--/.nav-wrapper-->
         <div class="row pr-0">
            <div class="col-md-3 sidebar-main-nav-colmd3">
               <div class="main-sidebar">
                  <ul>
                     <li class="qm-active" >
                        <div class="list-start">
                           <i class="fa fa-chevron-right" aria-hidden="true"></i>
                           <a href="#">Home</a>
                        </div>
                     </li>
                     <li>
                        <div class="list-start">
                           <i class="fa fa-chevron-right" aria-hidden="true"></i><a href="#">About</a>
                        </div>
                     </li>
                     <li>
                        <div class="list-start">
                           <i class="fa fa-chevron-right" aria-hidden="true"></i>
                           <a href="#">Contact</a>
                        </div>
                     </li>
                     <li>
                        <div class="list-start">
                           <i class="fa fa-chevron-right" aria-hidden="true"></i>
                           <a href="#">Features</a>
                        </div>
                     </li>
                     <li>
                        <div class="list-start" >
                           <i class="fa fa-chevron-right" aria-hidden="true"></i>
                           <a href="#">Blogs</a>
                        </div>
                     </li>
                     <li>
                        <div class="list-start" >
                           <i class="fa fa-chevron-right" aria-hidden="true"></i>
                           <a href="#">Product</a>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-md-9 m-p-0">
               <div class="main-content">
                  <!--/#skipCont-->
                  <div id="fontSize" class="wrapper body-wrapper ">
                     <!--/#page-head-->
                     <section id="paragraph" class="wrapper paragraph-wrapper">
                        <div class="container common-container four_content pm-0">
                           <div class="align-lt">
                              <h2 class="mt-0 mb-20">About Us</h2>
                              <img
                                 src="{{ asset('assets-cppri/images/paragraph-img/cppri-admin-block.jpg') }}"
                                 alt>
                              <!-- <h3>Headline goes here...</h3> -->
                              <p>Description of the heading 2 goes here. An
                                 informative text section that outlines the work
                                 portfolio of the ministry and the initiatives/
                                 schemes and
                                 other useful purpose that the ministry website
                                 serves. Description of the main heading goes
                                 here.
                                 An informative text section that outlines the
                                 work
                                 portfolio of the ministry and the initiatives/
                                 schemes and other useful purpose that the
                                 ministry
                                 website serves. Description of the main heading
                                 goes here. An informative text section that
                                 outlines the work portfolio of the ministry and
                                 the initiatives/ schemes and other useful
                                 purpose
                                 that the ministry website serves.
                              </p>
                              <p>Description of the heading 2 goes here. An
                                 informative text section that outlines the work
                                 portfolio of the ministry and the initiatives/
                                 schemes and
                                 other useful purpose that the ministry website
                                 serves. Description of the main heading goes
                                 here.
                                 An informative text section that outlines the
                                 work
                                 p
                                 ortfolio of the ministry and the initiatives/
                                 schemes and other useful purpose that the
                                 ministry
                                 website serves. Description of the main heading
                                 goes here.
                                 An informative text section that outlines the
                                 work
                                 portfolio of the ministry and the initiatives/
                                 schemes and other useful purpose that the
                                 ministry
                                 website serves.
                              </p>
                              <div class="text-center">
                                 <a href="#" class="more more gallery-more-btn"
                                    title="View more about heading 2">View More</a>
                              </div>
                           </div>
                        </div>
                     </section>
                     <!--/#paragraph-->
                     <section id="list" class="wrapper list-wrapper ptb-30">
                        <div class="container common-container four_content pm-0">
                           <h3 class="master-title mt-0" >List</h3>
                           <div class="list list-circle">
                              <!-- <h4 class="head-style-list" >List 1</h4> -->
                              <ul class="clearfix mb-0">
                                 <li>To make CPPRI a Centre of Excellence with Focus in the area of Technology Transfer</li>
                                 <li>To make Indian Paper Industry sustainable and Globally Competitive.</li>
                                 <li>In pursuit of cleaner Production, Resource Conversation & Quality Excellence in Pulp & Paper Industry</li>
                                 <!-- <li>List Item 4</li> -->
                              </ul>
                           </div>
                           <hr />
                           <!-- <h3 class="master-title" >Ordered List</h3>
                              <div class="order-list mg-top">
                                 <h4 class="head-style-list" >List 2</h4>
                                 <ol type="1" class="clearfix">
                                    <li>List Item </li>
                                    <li>List Item </li>
                                    <li>List Item </li>
                                    <li>List Item </li>
                                 </ol>
                              </div> -->
                        </div>
                     </section>
                     <!--/#list-->
                     <!--/#article-->
                     <section id="datatable">
                        <div class="container common-container">
                           <div class="row p-0 ">
                              <div class="col-md-12">
                                 <h3 class="master-title mt-0 mb-20" >DataTable</h3>

                                  <div class="scroller-tbl" >

                                 <table id="example" class="display" style="width:100%">

                                    <thead>
                                       <tr>
                                          <th>Name</th>
                                          <th>Position</th>
                                          <th>Office</th>
                                          <th>Age</th>
                                          <th>Start date</th>
                                          <th>Salary</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>Tiger Nixon</td>
                                          <td>System Architect</td>
                                          <td>Edinburgh</td>
                                          <td>61</td>
                                          <td>2011-04-25</td>
                                          <td>$320,800</td>
                                       </tr>
                                       <tr>
                                          <td>Garrett Winters</td>
                                          <td>Accountant</td>
                                          <td>Tokyo</td>
                                          <td>63</td>
                                          <td>2011-07-25</td>
                                          <td>$170,750</td>
                                       </tr>
                                       <tr>
                                          <td>Ashton Cox</td>
                                          <td>Junior Technical Author</td>
                                          <td>San Francisco</td>
                                          <td>66</td>
                                          <td>2009-01-12</td>
                                          <td>$86,000</td>
                                       </tr>
                                       <tr>
                                          <td>Cedric Kelly</td>
                                          <td>Senior Javascript Developer</td>
                                          <td>Edinburgh</td>
                                          <td>22</td>
                                          <td>2012-03-29</td>
                                          <td>$433,060</td>
                                       </tr>
                                       <tr>
                                          <td>Airi Satou</td>
                                          <td>Accountant</td>
                                          <td>Tokyo</td>
                                          <td>33</td>
                                          <td>2008-11-28</td>
                                          <td>$162,700</td>
                                       </tr>
                                       <tr>
                                          <td>Brielle Williamson</td>
                                          <td>Integration Specialist</td>
                                          <td>New York</td>
                                          <td>61</td>
                                          <td>2012-12-02</td>
                                          <td>$372,000</td>
                                       </tr>
                                       <tr>
                                          <td>Herrod Chandler</td>
                                          <td>Sales Assistant</td>
                                          <td>San Francisco</td>
                                          <td>59</td>
                                          <td>2012-08-06</td>
                                          <td>$137,500</td>
                                       </tr>
                                       <tr>
                                          <td>Rhona Davidson</td>
                                          <td>Integration Specialist</td>
                                          <td>Tokyo</td>
                                          <td>55</td>
                                          <td>2010-10-14</td>
                                          <td>$327,900</td>
                                       </tr>
                                       <tr>
                                          <td>Colleen Hurst</td>
                                          <td>Javascript Developer</td>
                                          <td>San Francisco</td>
                                          <td>39</td>
                                          <td>2009-09-15</td>
                                          <td>$205,500</td>
                                       </tr>
                                       <tr>
                                          <td>Sonya Frost</td>
                                          <td>Software Engineer</td>
                                          <td>Edinburgh</td>
                                          <td>23</td>
                                          <td>2008-12-13</td>
                                          <td>$103,600</td>
                                       </tr>
                                       <tr>
                                          <td>Jena Gaines</td>
                                          <td>Office Manager</td>
                                          <td>London</td>
                                          <td>30</td>
                                          <td>2008-12-19</td>
                                          <td>$90,560</td>
                                       </tr>
                                       <tr>
                                          <td>Quinn Flynn</td>
                                          <td>Support Lead</td>
                                          <td>Edinburgh</td>
                                          <td>22</td>
                                          <td>2013-03-03</td>
                                          <td>$342,000</td>
                                       </tr>
                                       <tr>
                                          <td>Charde Marshall</td>
                                          <td>Regional Director</td>
                                          <td>San Francisco</td>
                                          <td>36</td>
                                          <td>2008-10-16</td>
                                          <td>$470,600</td>
                                       </tr>
                                       <tr>
                                          <td>Haley Kennedy</td>
                                          <td>Senior Marketing Designer</td>
                                          <td>London</td>
                                          <td>43</td>
                                          <td>2012-12-18</td>
                                          <td>$313,500</td>
                                       </tr>
                                       <tr>
                                          <td>Tatyana Fitzpatrick</td>
                                          <td>Regional Director</td>
                                          <td>London</td>
                                          <td>19</td>
                                          <td>2010-03-17</td>
                                          <td>$385,750</td>
                                       </tr>
                                       <tr>
                                          <td>Michael Silva</td>
                                          <td>Marketing Designer</td>
                                          <td>London</td>
                                          <td>66</td>
                                          <td>2012-11-27</td>
                                          <td>$198,500</td>
                                       </tr>
                                       <tr>
                                          <td>Paul Byrd</td>
                                          <td>Chief Financial Officer (CFO)</td>
                                          <td>New York</td>
                                          <td>64</td>
                                          <td>2010-06-09</td>
                                          <td>$725,000</td>
                                       </tr>
                                       <tr>
                                          <td>Gloria Little</td>
                                          <td>Systems Administrator</td>
                                          <td>New York</td>
                                          <td>59</td>
                                          <td>2009-04-10</td>
                                          <td>$237,500</td>
                                       </tr>
                                       <tr>
                                          <td>Bradley Greer</td>
                                          <td>Software Engineer</td>
                                          <td>London</td>
                                          <td>41</td>
                                          <td>2012-10-13</td>
                                          <td>$132,000</td>
                                       </tr>
                                       <tr>
                                          <td>Dai Rios</td>
                                          <td>Personnel Lead</td>
                                          <td>Edinburgh</td>
                                          <td>35</td>
                                          <td>2012-09-26</td>
                                          <td>$217,500</td>
                                       </tr>
                                       <tr>
                                          <td>Jenette Caldwell</td>
                                          <td>Development Lead</td>
                                          <td>New York</td>
                                          <td>30</td>
                                          <td>2011-09-03</td>
                                          <td>$345,000</td>
                                       </tr>
                                       <tr>
                                          <td>Yuri Berry</td>
                                          <td>Chief Marketing Officer (CMO)</td>
                                          <td>New York</td>
                                          <td>40</td>
                                          <td>2009-06-25</td>
                                          <td>$675,000</td>
                                       </tr>
                                       <tr>
                                          <td>Caesar Vance</td>
                                          <td>Pre-Sales Support</td>
                                          <td>New York</td>
                                          <td>21</td>
                                          <td>2011-12-12</td>
                                          <td>$106,450</td>
                                       </tr>
                                       <tr>
                                          <td>Doris Wilder</td>
                                          <td>Sales Assistant</td>
                                          <td>Sydney</td>
                                          <td>23</td>
                                          <td>2010-09-20</td>
                                          <td>$85,600</td>
                                       </tr>
                                       <tr>
                                          <td>Angelica Ramos</td>
                                          <td>Chief Executive Officer (CEO)</td>
                                          <td>London</td>
                                          <td>47</td>
                                          <td>2009-10-09</td>
                                          <td>$1,200,000</td>
                                       </tr>
                                       <tr>
                                          <td>Gavin Joyce</td>
                                          <td>Developer</td>
                                          <td>Edinburgh</td>
                                          <td>42</td>
                                          <td>2010-12-22</td>
                                          <td>$92,575</td>
                                       </tr>
                                       <tr>
                                          <td>Jennifer Chang</td>
                                          <td>Regional Director</td>
                                          <td>Singapore</td>
                                          <td>28</td>
                                          <td>2010-11-14</td>
                                          <td>$357,650</td>
                                       </tr>
                                       <tr>
                                          <td>Brenden Wagner</td>
                                          <td>Software Engineer</td>
                                          <td>San Francisco</td>
                                          <td>28</td>
                                          <td>2011-06-07</td>
                                          <td>$206,850</td>
                                       </tr>
                                       <tr>
                                          <td>Fiona Green</td>
                                          <td>Chief Operating Officer (COO)</td>
                                          <td>San Francisco</td>
                                          <td>48</td>
                                          <td>2010-03-11</td>
                                          <td>$850,000</td>
                                       </tr>
                                       <tr>
                                          <td>Shou Itou</td>
                                          <td>Regional Marketing</td>
                                          <td>Tokyo</td>
                                          <td>20</td>
                                          <td>2011-08-14</td>
                                          <td>$163,000</td>
                                       </tr>
                                       <tr>
                                          <td>Michelle House</td>
                                          <td>Integration Specialist</td>
                                          <td>Sydney</td>
                                          <td>37</td>
                                          <td>2011-06-02</td>
                                          <td>$95,400</td>
                                       </tr>
                                       <tr>
                                          <td>Suki Burks</td>
                                          <td>Developer</td>
                                          <td>London</td>
                                          <td>53</td>
                                          <td>2009-10-22</td>
                                          <td>$114,500</td>
                                       </tr>
                                       <tr>
                                          <td>Prescott Bartlett</td>
                                          <td>Technical Author</td>
                                          <td>London</td>
                                          <td>27</td>
                                          <td>2011-05-07</td>
                                          <td>$145,000</td>
                                       </tr>
                                       <tr>
                                          <td>Gavin Cortez</td>
                                          <td>Team Leader</td>
                                          <td>San Francisco</td>
                                          <td>22</td>
                                          <td>2008-10-26</td>
                                          <td>$235,500</td>
                                       </tr>
                                       <tr>
                                          <td>Martena Mccray</td>
                                          <td>Post-Sales support</td>
                                          <td>Edinburgh</td>
                                          <td>46</td>
                                          <td>2011-03-09</td>
                                          <td>$324,050</td>
                                       </tr>
                                       <tr>
                                          <td>Unity Butler</td>
                                          <td>Marketing Designer</td>
                                          <td>San Francisco</td>
                                          <td>47</td>
                                          <td>2009-12-09</td>
                                          <td>$85,675</td>
                                       </tr>
                                       <tr>
                                          <td>Howard Hatfield</td>
                                          <td>Office Manager</td>
                                          <td>San Francisco</td>
                                          <td>51</td>
                                          <td>2008-12-16</td>
                                          <td>$164,500</td>
                                       </tr>
                                       <tr>
                                          <td>Hope Fuentes</td>
                                          <td>Secretary</td>
                                          <td>San Francisco</td>
                                          <td>41</td>
                                          <td>2010-02-12</td>
                                          <td>$109,850</td>
                                       </tr>
                                       <tr>
                                          <td>Vivian Harrell</td>
                                          <td>Financial Controller</td>
                                          <td>San Francisco</td>
                                          <td>62</td>
                                          <td>2009-02-14</td>
                                          <td>$452,500</td>
                                       </tr>
                                       <tr>
                                          <td>Timothy Mooney</td>
                                          <td>Office Manager</td>
                                          <td>London</td>
                                          <td>37</td>
                                          <td>2008-12-11</td>
                                          <td>$136,200</td>
                                       </tr>
                                       <tr>
                                          <td>Jackson Bradshaw</td>
                                          <td>Director</td>
                                          <td>New York</td>
                                          <td>65</td>
                                          <td>2008-09-26</td>
                                          <td>$645,750</td>
                                       </tr>
                                       <tr>
                                          <td>Olivia Liang</td>
                                          <td>Support Engineer</td>
                                          <td>Singapore</td>
                                          <td>64</td>
                                          <td>2011-02-03</td>
                                          <td>$234,500</td>
                                       </tr>
                                       <tr>
                                          <td>Bruno Nash</td>
                                          <td>Software Engineer</td>
                                          <td>London</td>
                                          <td>38</td>
                                          <td>2011-05-03</td>
                                          <td>$163,500</td>
                                       </tr>
                                       <tr>
                                          <td>Sakura Yamamoto</td>
                                          <td>Support Engineer</td>
                                          <td>Tokyo</td>
                                          <td>37</td>
                                          <td>2009-08-19</td>
                                          <td>$139,575</td>
                                       </tr>
                                       <tr>
                                          <td>Thor Walton</td>
                                          <td>Developer</td>
                                          <td>New York</td>
                                          <td>61</td>
                                          <td>2013-08-11</td>
                                          <td>$98,540</td>
                                       </tr>
                                       <tr>
                                          <td>Finn Camacho</td>
                                          <td>Support Engineer</td>
                                          <td>San Francisco</td>
                                          <td>47</td>
                                          <td>2009-07-07</td>
                                          <td>$87,500</td>
                                       </tr>
                                       <tr>
                                          <td>Serge Baldwin</td>
                                          <td>Data Coordinator</td>
                                          <td>Singapore</td>
                                          <td>64</td>
                                          <td>2012-04-09</td>
                                          <td>$138,575</td>
                                       </tr>
                                       <tr>
                                          <td>Zenaida Frank</td>
                                          <td>Software Engineer</td>
                                          <td>New York</td>
                                          <td>63</td>
                                          <td>2010-01-04</td>
                                          <td>$125,250</td>
                                       </tr>
                                       <tr>
                                          <td>Zorita Serrano</td>
                                          <td>Software Engineer</td>
                                          <td>San Francisco</td>
                                          <td>56</td>
                                          <td>2012-06-01</td>
                                          <td>$115,000</td>
                                       </tr>
                                       <tr>
                                          <td>Jennifer Acosta</td>
                                          <td>Junior Javascript Developer</td>
                                          <td>Edinburgh</td>
                                          <td>43</td>
                                          <td>2013-02-01</td>
                                          <td>$75,650</td>
                                       </tr>
                                       <tr>
                                          <td>Cara Stevens</td>
                                          <td>Sales Assistant</td>
                                          <td>New York</td>
                                          <td>46</td>
                                          <td>2011-12-06</td>
                                          <td>$145,600</td>
                                       </tr>
                                       <tr>
                                          <td>Hermione Butler</td>
                                          <td>Regional Director</td>
                                          <td>London</td>
                                          <td>47</td>
                                          <td>2011-03-21</td>
                                          <td>$356,250</td>
                                       </tr>
                                       <tr>
                                          <td>Lael Greer</td>
                                          <td>Systems Administrator</td>
                                          <td>London</td>
                                          <td>21</td>
                                          <td>2009-02-27</td>
                                          <td>$103,500</td>
                                       </tr>
                                       <tr>
                                          <td>Jonas Alexander</td>
                                          <td>Developer</td>
                                          <td>San Francisco</td>
                                          <td>30</td>
                                          <td>2010-07-14</td>
                                          <td>$86,500</td>
                                       </tr>
                                       <tr>
                                          <td>Shad Decker</td>
                                          <td>Regional Director</td>
                                          <td>Edinburgh</td>
                                          <td>51</td>
                                          <td>2008-11-13</td>
                                          <td>$183,000</td>
                                       </tr>
                                       <tr>
                                          <td>Michael Bruce</td>
                                          <td>Javascript Developer</td>
                                          <td>Singapore</td>
                                          <td>29</td>
                                          <td>2011-06-27</td>
                                          <td>$183,000</td>
                                       </tr>
                                       <tr>
                                          <td>Donna Snider</td>
                                          <td>Customer Support</td>
                                          <td>New York</td>
                                          <td>27</td>
                                          <td>2011-01-25</td>
                                          <td>$112,000</td>
                                       </tr>
                                    </tbody>
                                 </table>

                              </div>
                           </div>
                        </div>
                     </section>
                     <section class="image-gallery">
                        <div class="container common-container">
                           <h3 class="master-title mt-0 mb-20">Image Gallery</h3>
                           <div class="row main-gallery p-0">
                              <div class=" col-md-4 ">
                                 <div class="img-con-sec">
                                    <div class="img-card">
                                       <img class="glightbox"
                                          src="{{ asset('assets-cppri/images/photo_gallery/g3.jpg') }}" alt>
                                    </div>
                                    <p>Image title 1</p>
                                 </div>
                              </div>
                              <div class=" col-md-4 ">
                                 <div class="img-con-sec">
                                    <div class="img-card">
                                       <img class="glightbox"
                                          src="{{ asset('assets-cppri/images/photo_gallery/g1.jpg') }}" alt>
                                    </div>
                                    <p>Image title 2</p>
                                 </div>
                              </div>
                              <div class=" col-md-4 ">
                                 <div class="img-con-sec">
                                    <div class="img-card">
                                       <img class="glightbox"
                                          src="{{ asset('assets-cppri/images/photo_gallery/g2.jpg') }}" alt>
                                    </div>
                                    <p>Image title 3 </p>
                                 </div>
                              </div>
                              <div class="col-md-12 text-center">
                                 <a href="#" class="more gallery-more-btn" title="View more about heading 1">View More</a>
                              </div>
                           </div>
                        </div>
                     </section>
                     <section class="vid-image-gallery ptb-30">
                        <div class="container common-container">
                           <h3 class="master-title mb-20 mt-0">Video Gallery</h3>
                           <div class="row vid-main-gallery p-0">
                              <div class="col-md-6">
                                 <div class="vid-card">
                                    <video controls="controls">
                                       <source src="{{ asset('assets-cppri/images/photo_gallery/video.mp4') }}" type="video/mp4" /> </video>
                                    <p>Video title 1 go here</p>
                                 </div>
                              </div>
                              <div class=" col-md-6 ">
                                 <div class="vid-card">
                                    <video controls="controls">
                                       <source
                                          src="{{ asset('assets-cppri/images/photo_gallery/video.mp4') }}"
                                          type="video/mp4" />
                                    </video>
                                    <p>Video title 2 go here</p>
                                 </div>
                              </div>
                              <div class="col-md-12 text-center">
                                 <a href="#" class="more gallery-more-btn" title="View more about heading 1">View More</a>
                              </div>
                           </div>
                        </div>
                     </section>
                     <section class="cppri-tabs-section">
                        <div class="container common-container">
                           <h3 class="master-title mb-20 mt-0">Tabs Section</h3>
                           <div class="tabs">
                              <input type="radio" id="tab1" name="tab-control" checked>
                              <input type="radio" id="tab2" name="tab-control">
                              <input type="radio" id="tab3" name="tab-control">
                              <input type="radio" id="tab4" name="tab-control">
                              <ul>
                                 <li title="Features"><label for="tab1">
                                    <span>Features</span></label>
                                 </li>
                                 <li title="Delivery Contents"><label for="tab2">
                                    <span>Contents</span></label>
                                 </li>
                                 <li title="Shipping"><label for="tab3">
                                    <span>Shipping</span></label>
                                 </li>
                                 <li title="Returns"><label for="tab4">
                                    <span>Returns</span></label>
                                 </li>
                              </ul>
                              <div class="slider">
                                 <div class="indicator"></div>
                              </div>
                              <div class="content">
                                 <section>
                                    <h2>Features</h2>
                                    Lorem ipsum dolor sit amet1, consectetur
                                    adipisicing elit. Ea dolorem sequi, quo tempore in eum obcaecati
                                    atque quibusdam officiis est dolorum minima deleniti ratione molestias
                                    numquam. Voluptas voluptates quibusdam cum?
                                    Lorem ipsum dolor sit amet1, consectetur
                                    adipisicing elit. Ea dolorem sequi, quo tempore in eum obcaecati
                                    atque quibusdam officiis est dolorum minima deleniti ratione molestias
                                    numquam. Voluptas voluptates quibusdam cum?
                                    Lorem ipsum dolor sit amet1, consectetur
                                    adipisicing elit. Ea dolorem sequi, quo tempore in eum obcaecati
                                    atque quibusdam officiis est dolorum minima deleniti ratione molestias
                                    numquam. Voluptas voluptates quibusdam cum?
                                    Lorem ipsum dolor sit amet1, consectetur
                                    adipisicing elit. Ea dolorem sequi, quo tempore in eum obcaecati
                                    atque quibusdam officiis est dolorum minima deleniti ratione molestias
                                    numquam. Voluptas voluptates quibusdam cum?
                                 </section>
                                 <section>
                                    <h2>Delivery Contents</h2>
                                    Lorem ipsum dolor sit amet, consectetur2 adipisicing elit.
                                    Autem quas adipisci a accusantium eius ut voluptatibus ad impedit nulla,
                                    ipsa qui. Quasi temporibus eos commodi aliquid impedit
                                    amet, similique nulla.
                                    Lorem ipsum dolor sit amet, consectetur2 adipisicing elit.
                                    Autem quas adipisci a accusantium eius ut voluptatibus ad impedit nulla,
                                    ipsa qui. Quasi temporibus eos commodi aliquid impedit
                                    amet, similique nulla.
                                    Lorem ipsum dolor sit amet1, consectetur
                                    adipisicing elit. Ea dolorem sequi, quo tempore in eum obcaecati
                                    atque quibusdam officiis est dolorum minima deleniti ratione molestias
                                    numquam. Voluptas voluptates quibusdam cum?
                                    Lorem ipsum dolor sit amet1, consectetur
                                    adipisicing elit. Ea dolorem sequi, quo tempore in eum obcaecati
                                    atque quibusdam officiis est dolorum minima deleniti ratione molestias
                                    numquam. Voluptas voluptates quibusdam cum?
                                 </section>
                                 <section>
                                    <h2>Shipping</h2>
                                    Lorem ipsum dolor sit amet, consectetur3 adipisicing elit.
                                    Quam nemo ducimus eius, magnam error quisquam sunt voluptate
                                    labore, excepturi numquam! Alias libero optio sed harum
                                    debitis! Veniam, quia in eum.
                                    Lorem ipsum dolor sit amet, consectetur3 adipisicing elit.
                                    Quam nemo ducimus eius, magnam error quisquam sunt voluptate
                                    labore, excepturi numquam! Alias libero optio sed harum
                                    debitis! Veniam, quia in eum.
                                    Lorem ipsum dolor sit amet1, consectetur
                                    adipisicing elit. Ea dolorem sequi, quo tempore in eum obcaecati
                                    atque quibusdam officiis est dolorum minima deleniti ratione molestias
                                    numquam. Voluptas voluptates quibusdam cum?
                                    Lorem ipsum dolor sit amet1, consectetur
                                    adipisicing elit. Ea dolorem sequi, quo tempore in eum obcaecati
                                    atque quibusdam officiis est dolorum minima deleniti ratione molestias
                                    numquam. Voluptas voluptates quibusdam cum?
                                 </section>
                                 <section>
                                    <h2>Returns</h2>
                                    Lorem ipsum dolor sit amet, consectetur4 adipisicing elit.
                                    Ipsa dicta vero rerum?
                                    Eaque repudiandae architecto libero reprehenderit
                                    aliquam magnam ratione quidem?
                                    Nobis doloribus molestiae enim deserunt
                                    necessitatibus eaque quidem incidunt.
                                    Lorem ipsum dolor sit amet, consectetur4 adipisicing elit.
                                    Ipsa dicta vero rerum?
                                    Eaque repudiandae architecto libero reprehenderit
                                    aliquam magnam ratione quidem?
                                    Nobis doloribus molestiae enim deserunt
                                    necessitatibus eaque quidem incidunt.
                                    Lorem ipsum dolor sit amet1, consectetur
                                    adipisicing elit. Ea dolorem sequi, quo tempore in eum obcaecati
                                    atque quibusdam officiis est dolorum minima deleniti ratione molestias
                                    numquam. Voluptas voluptates quibusdam cum?
                                    Lorem ipsum dolor sit amet1, consectetur
                                    adipisicing elit. Ea dolorem sequi, quo tempore in eum obcaecati
                                    atque quibusdam officiis est dolorum minima deleniti ratione molestias
                                    numquam. Voluptas voluptates quibusdam cum?
                                 </section>
                              </div>
                           </div>
                      </div>
                     </section>

                     <section class="ptb-30 pb-0">
                       <div class="container common-container">
                        <h3 class="master-title mt-0 mb-20" >Accordions</h3>
                     <div class="row">
                        <div class="col-md-12 p-0">
                             <div class="panel-group" id="accordion">
                          <div class="panel panel-default">
                             <div class="panel-heading">
                                <h4 class="panel-title">
                                   <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                   Collapsible Group Item #1
                                   </a>
                                </h4>
                             </div>
                             <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                   Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                             </div>
                          </div>
                          <div class="panel panel-default">
                             <div class="panel-heading">
                                <h4 class="panel-title">
                                   <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                   Collapsible Group Item #2
                                   </a>
                                </h4>
                             </div>
                             <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                   Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                             </div>
                          </div>
                          <div class="panel panel-default">
                             <div class="panel-heading">
                                <h4 class="panel-title">
                                   <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                   Collapsible Group Item #3
                                   </a>
                                </h4>
                             </div>
                             <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                   Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                             </div>
                          </div>
                       </div>
                        </div>
                     </div>
                       </div>
                    </section>
               </div>
            </div>
         </div>
         </div>
         </div>
      </div>

@endsection

