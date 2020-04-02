<?php get_header();?>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#"></a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <h5 style="color:white">Geospatial Data Analisys</h5>
      </div>

      <div class="sidebar-menu">
             <ul>
               <li class="header-menu">
                 <span></span>
               </li>

               <li class="sidebar-dropdown">
                 <a href="#">
                   <i class="fa fa-chart-line"></i>
                   <span>Charts</span>
                 </a>
                 <div class="sidebar-submenu">
                   <ul>
                     <li>
                       <label class="radio">Pie chart
                         <input type="radio"  id="piechart" value="1" name="is_chart" class="checkme">
                         <span class="checkround"></span>
                       </label>
                     </li>
                     <li>
                         <label class="radio">Line chart
                          <input type="radio"  id="linechart" value="2" name="is_chart" class="checkme">
                          <span class="checkround"></span>
                        </label>
                     </li>
                     <li>
                       <label class="radio">Bar chart
                        <input type="radio"  id="barchart" value="3" name="is_chart" class="checkme">
                        <span class="checkround"></span>
                      </label>
                     </li>
                     <li>
                       <label class="radio">Histogram
                        <input type="radio" id="histogram" value="4"  name="is_chart" class="checkme">
                        <span class="checkround"></span>
                      </label>
                     </li>
                   </ul>
                 </div>
               </li>
             </ul>
           </div>
         </div>
         <div class="sidebar-footer">
         <button class="btn mr-2 mb-2 btn-icon-only btn-outline-primary" type="button" id="chartConfig" data-toggle="tooltip" data-placement="top" title="map configuration">
         <span class="btn-inner-icon"><i class="fa fa-cog"></i></span>
         </button>
         <!-- <button  class="btn    btn-xs btn-outline-danger"><i class="fas fa-print"></i></button> -->
         </div>
         </nav>
         <!-- sidebar-wrapper  -->
         <main class="page-content">
         <div class="container-fluid">
         <h2>Geospatial Chart</h2>
         <hr>
       

         <div id="myChart">
         </div>




         </div>

         </main>
         <!-- page-content" -->
         </div>
              <?php get_footer();?>
