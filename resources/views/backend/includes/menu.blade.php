<section class="sidebar">
      <!-- Sidebar user panel -->
      
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
         
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Home</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i>3 Box of Information
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
                  <ul class="treeview-menu">
                    <li><a href="{{route('desBoxAdd')}}"><i class="fa fa-circle-o"></i>Info Add</a></li>
                    <li><a href="{{route('desBoxManage')}}"><i class="fa fa-circle-o"></i>Info Manage</a></li>
                 
                
              </ul>
            </li>
		
			
			<li>
              <a href="{{route('homeAboutAdd')}}"><i class="fa fa-circle-o"></i>About Us Add
              </a>
             
      </li>

      <li>
              <a href="{{route('counterManage')}}"><i class="fa fa-circle-o"></i>Counter Add
              </a>
             
      </li>

     

      <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i>Why Choose Us
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
              <li>
                  <a href="{{route('chooseInfoAdd')}}"><i class="fa fa-circle-o"></i>Information
                  </a></li>

                <li>
                  <a href="{{route('serviceManageChoose')}}"><i class="fa fa-circle-o"></i>Provide Services
                   
                  </a>
                 
                </li>
                
              </ul>
            </li>

            <li>
              <a href="{{route('efficiencyManage')}}"><i class="fa fa-circle-o"></i>Working Efficiency
              </a>
             
      </li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Portfolio</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('portCatManage')}}"><i class="fa fa-circle-o"></i>Category Of Portfolio</a></li>
            <li><a href="{{route('portfolioManage')}}"><i class="fa fa-circle-o"></i>Add Portfolio</a></li>
            <li><a href="{{route('imageCreate')}}"><i class="fa fa-circle-o"></i>Add Background Image</a></li>
    
          </ul>
        </li>
		
		
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Price Manager</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('manageHosting')}}"><i class="fa fa-circle-o"></i>Hosting Price</a></li>
            <li><a href="{{route('manageContent')}}"><i class="fa fa-circle-o"></i>Content Price</a></li>
          </ul>
        </li>
		
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Order Manager</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('orderListManage')}}"><i class="fa fa-circle-o"></i>Order List</a></li>
           
          </ul>
        </li>
		
		
		
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Our Product</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('catManage')}}"><i class="fa fa-circle-o"></i>Category Of Product</a></li>
            <li><a href="{{route('productManage')}}"><i class="fa fa-circle-o"></i>Add Product</a></li>
            <li><a href="{{route('productImageAdd')}}"><i class="fa fa-circle-o"></i>Product Banner Add</a></li>
          </ul>
        </li>

        <li>
          <a href="{{route('testimonialManage')}}"><i class="fa fa-edit"></i> <span>Testimonial</span></a>
         
        </li>


      
		<li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>About Us</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li>
          <a href="{{route('desAdd')}}"><i class="fa fa-circle-o"></i> <span>Description Add</span></a>
         
        </li>
        <li>
          <a href="{{route('catTeamManage')}}"><i class="fa fa-circle-o"></i> <span>Category Of Team</span></a>
         
        </li>
			
			
			<li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i>3 Box Description
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                

              <li>
          <a href="{{route('desAddOne')}}"><i class="fa fa-circle-o"></i> <span>Creativity Add</span></a>
         
             </li>

             <li>
          <a href="{{route('desAddTwo')}}"><i class="fa fa-circle-o"></i> <span>Mission Add</span></a>
         
             </li>
             <li>
          <a href="{{route('desAddThree')}}"><i class="fa fa-circle-o"></i> <span>Vision Add</span></a>
         
             </li> 
				
              </ul>
            </li>
			
            <li>
          <a href="{{route('ceoInfoAdd')}}"><i class="fa fa-circle-o"></i> <span>CEO Info</span></a>
         
        </li>
			
			  <li>
          <a href="{{route('memberInfoManage')}}"><i class="fa fa-circle-o"></i> <span>Meet Our Team</span></a>
         
        </li>
			

            <li >
              <a href="{{route('bannerImageAdd')}}"><i class="fa fa-circle-o"></i>About Banner Add
              </a>
             
            </li>
            
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Packages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('packageCategoryManage')}}"><i class="fa fa-circle-o"></i>Category of Packages</a></li>
            <li><a href="{{route('packageManage')}}"><i class="fa fa-circle-o"></i>Packege Add</a></li>

    
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Services</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('serviceCategoryManage')}}"><i class="fa fa-circle-o"></i>Category of Service</a></li>
            <li><a href="{{route('serviceManage')}}"><i class="fa fa-circle-o"></i>Services Add</a></li>
    
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('blogCatManage')}}"><i class="fa fa-circle-o"></i>Blog Category Add</a></li>
            <li><a href="{{route('blogManage')}}"><i class="fa fa-circle-o"></i>Blog Add</a></li>
            <li><a href="{{route('blogBannerAdd')}}"><i class="fa fa-circle-o"></i>Blog Banner Image Set </a></li>
    
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Plan or Package</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i>Client list</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i>Payment List</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i>Plan Wise Payment History</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i>Transaction History</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i>Plan and Package Manage</a></li>
    
          </ul>
        </li>
		
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Contact Us</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('contactInfoManage')}}"><i class="fa fa-circle-o"></i>Information Add</a></li>
            <li><a href="{{route('contactPEManage')}}"><i class="fa fa-circle-o"></i>Phone & Email</a></li>

            <li><a href="{{route('contactImageAdd')}}"><i class="fa fa-circle-o"></i>Contact Us Banner Add</a></li>
    
          </ul>
        </li>
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Extra</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

		
          <li >
              <a href="{{route('logoCreate')}}"><i class="fa fa-circle-o"></i>Logo
              </a>
             
            </li>
		
            <li >
              <a href="{{route('sliderManage')}}"><i class="fa fa-circle-o"></i>Slider
              </a>
             
            </li>
		
            
            <li >
              <a href="{{route('hfInfoAdd')}}"><i class="fa fa-circle-o"></i>Header & Footer Info
              </a>
             
            </li>

            <li >
              <a href="{{route('toolsManage')}}"><i class="fa fa-circle-o"></i>Engineering Tools Image
              </a>
             
            </li>
            
          </ul>
        </li>

       
        
       
        
      </ul>
    </section>