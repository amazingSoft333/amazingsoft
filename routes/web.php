<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*Frontend Section */
Route::get('/','FrontendController@index')->name('home');
Route::get('/about','FrontendController@aboutContent')->name('about');
Route::get('/packageContent/{id}','FrontendController@packageContent')->name('package');
Route::get('/blog','FrontendController@blogContent')->name('blog');
Route::get('/product','FrontendController@productContent')->name('product');
Route::get('/product-detail','FrontendController@productDetail')->name('productDetail');
Route::get('/product-register','FrontendController@productRegister')->name('productRegister');
Route::get('/blogDetail/{id}','FrontendController@blogDetailContent')->name('blogDetail');
Route::get('/contact','FrontendController@contactContent')->name('contact');

/*End Frontend Section */


Route::get('userpayment','FrontendController@userpayment_index')->name('userpayment');
Route::get('userpayment2','FrontendController@userpayment2_index')->name('userpayment2');
/*payment*/
Route::post('payment_store','FrontendController@payment_store')->name('payment_store');
Route::post('payment_storeee','FrontendController@payWithpaypal')->name('payment_storeee');
Route::get('paypal_success_status', 'FrontendController@getPaymentStatus')->name('status');

Route::post('payment_storeeebd','FrontendController@paymentbd_store')->name('payment_storeeebd');


/*Client Registration Section*/
Route::get('/home','ClientregController@index')->name('clientOrder');
Route::get('product','ClientregController@product_index')->name('product');
Route::get('notification','ClientregController@notification_index')->name('notification');




Route::get('/client/details','ClientregController@clientDetails')->name('clientDetails');
Route::get('/client/paymentHistory','ClientregController@clientPayment')->name('clientPayment');
Route::patch('/client/update/{id}','ClientregController@clientUpdate')->name('clientUpdate');
Route::get('setting','ClientregController@setting_index')->name('setting');
Route::post('changePassword','ClientregController@current_index')->name('current');
/*End Client Registration Section*/

Auth::routes();

//Route::get('/home', 'HomeController@index');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function() {
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

  // Password reset routes
  Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
  Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});

/*****************=========Admin==================
===========================Panel====================
============================Route====================
============================Start=====**************/

/*About us Section*/
Route::get('/about/descriptionAdd','AboutController@addDescription')->name('desAdd');
Route::post('/about/descriptionSave','AboutController@saveDescription')->name('desSave');
Route::get('/about/descriptionManage','AboutController@manageDescription')->name('desManage');
Route::post('/about/descriptionUpdate','AboutController@updateDescription')->name('desUpdate');
Route::get('/about/descriptionDelete/{id}','AboutController@deleteDescription')->name('desDelete');

/*End About us Section */

/* Team of category Section*/
Route::post('/categoryTeam/catSave','AboutController@saveCategory')->name('catTeamSave');
Route::get('/categoryTeam/catManage','AboutController@manageCategory')->name('catTeamManage');
Route::post('/categoryTeam/catUpdate','AboutController@updateCategory')->name('catTeamUpdate');
Route::get('/categoryTeam/catDelete/{id}','AboutController@deleteCategory')->name('catTeamDelete');

/*End Team of category Section*/

/*Three Box Information Section*/
Route::get('/onedescription/descriptionOneAdd','AboutController@addOneDescription')->name('desAddOne');
Route::post('/onedescription/descriptionOneSave','AboutController@saveOneDescription')->name('desSaveOne');
Route::get('/onedescription/descriptionOneManage','AboutController@manageOneDescription')->name('desManageOne');
Route::post('/onedescription/descriptionOneUpdate','AboutController@updateOneDescription')->name('desUpdateOne');
Route::get('/onedescription/descriptionOneDelete/{id}','AboutController@deleteOneDescription')->name('desDeleteOne');

Route::get('/twodes/descriptionTwoAdd','AboutController@addTwoDescription')->name('desAddTwo');
Route::post('/twodes/descriptionTwoSave','AboutController@saveTwoDescription')->name('desSaveTwo');
Route::get('/twodes/descriptionTwoManage','AboutController@manageTwoDescription')->name('desManageTwo');
Route::post('/twodes/descriptionTwoUpdate','AboutController@updateTwoDescription')->name('desUpdateTwo');
Route::get('/twodes/descriptionTwoDelete/{id}','AboutController@deleteTwoDescription')->name('desDeleteTwo');

Route::get('/threedes/descriptionThreeAdd','AboutController@addThreeDescription')->name('desAddThree');
Route::post('/threedes/descriptionThreeSave','AboutController@saveThreeDescription')->name('desSaveThree');
Route::get('/threedes/descriptionThreeManage','AboutController@manageThreeDescription')->name('desManageThree');
Route::post('/threedes/descriptionThreeUpdate','AboutController@updateThreeDescription')->name('desUpdateThree');
Route::get('/threedes/descriptionThreeDelete/{id}','AboutController@deleteThreeDescription')->name('desDeleteThree');

/*Three Box Information Section End */

/*CEO Information Section*/
Route::get('/ceoInfo/add','AboutController@createCeoInfo')->name('ceoInfoAdd');
Route::post('/ceoInfo/save','AboutController@storeCeoInfo')->name('ceoInfoSave');
Route::get('/ceoInfo/manage','AboutController@manageCeoInfo')->name('ceoInfoManage');
Route::patch('/ceoInfo/update/{id}','AboutController@updateCeoInfo')->name('ceoInfoUpdate');
Route::get('/ceoInfo/delete/{id}','AboutController@deleteCeoInfo')->name('ceoInfoDelete');
/*End CEO Information Section*/

/*Member Add Section*/

Route::post('/memberInfo/save','AboutController@saveMemberInfo')->name('memberInfoSave');
Route::get('/memberInfo/manage','AboutController@manageMemberInfo')->name('memberInfoManage');
Route::get('/memberInfo/details/{id}','AboutController@detailMemberInfo')->name('memberInfoDetails');
Route::patch('/memberInfo/update/{id}','AboutController@updateMemberInfo')->name('memberInfoUpdate');
Route::get('/memberInfo/delete/{id}','AboutController@deleteMemberInfo')->name('memberInfoDelete');
/*Member Add Section end */

/*About us Banner Section*/
Route::get('/aboutBanner/add','AboutController@createAboutBanner')->name('bannerImageAdd');
Route::post('/aboutBanner/save','AboutController@saveAboutBanner')->name('bannerImageSave');
Route::get('/aboutBanner/manage','AboutController@manageAboutBanner')->name('bannerInfoManage');
Route::get('/aboutBanner/delete/{id}','AboutController@deleteAboutBanner')->name('bannerInfoDelete');

/*End About us Banner Section */

/*Admin Home Section Start */
//box information 
Route::get('/shortInfo/homeBoxAdd','AdminhomeController@addDescription')->name('desBoxAdd');
Route::post('/shortInfo/homeBoxSave','AdminhomeController@saveDescription')->name('desBoxSave');
Route::get('/shortInfo/homeBoxManage','AdminhomeController@manageDescription')->name('desBoxManage');
Route::post('/shortInfo/homeBoxUpdate','AdminhomeController@updateDescription')->name('desBoxUpdate');
Route::get('/shortInfo/homeBoxDelete/{id}','AdminhomeController@deleteDescription')->name('desBoxDelete');

//About Us
Route::get('/homeAbout/homeAboutAdd','AdminhomeController@addHomeAbout')->name('homeAboutAdd');
Route::post('/homeAbout/homeAboutSave','AdminhomeController@saveHomeAbout')->name('homeAboutSave');
Route::get('/homeAbout/homeAboutManage','AdminhomeController@manageHomeAbout')->name('homeAboutManage');
Route::post('/homeAbout/homeAboutUpdate','AdminhomeController@updateHomeAbout')->name('homeAboutUpdate');
Route::get('/homeAbout/homeAboutDelete/{id}','AdminhomeController@deleteHomeAbout')->name('homeAboutDelete');
//Counter


Route::patch('approved/{id}','AdminController@approved_index')->name('approved');
Route::patch('message/{id}','AdminController@approved_index')->name('message');
















Route::post('/homeCounter/counterSave','AdminhomeController@saveCounter')->name('counterSave');
Route::get('/homeCounter/counterManage','AdminhomeController@manageCounter')->name('counterManage');
Route::post('/homeCounter/counterUpdate','AdminhomeController@updateCounter')->name('counterUpdate');
Route::get('/homeCounter/counterDelete/{id}','AdminhomeController@deleteCounter')->name('counterDelete');
//Working Efficiency 
Route::post('/homeEfficiency/efficiencySave','AdminhomeController@saveEff')->name('efficiencySave');
Route::get('/homeEfficiency/efficiencyManage','AdminhomeController@manageEff')->name('efficiencyManage');
Route::post('/homeEfficiency/efficiencyUpdate','AdminhomeController@updateEff')->name('efficiencyUpdate');
Route::get('/homeEfficiency/efficiencyDelete/{id}','AdminhomeController@deleteEff')->name('efficiencyDelete');
//Why Choose us Section
Route::get('/chooseus/chooseAdd','AdminhomeController@addChoose')->name('chooseInfoAdd');
Route::post('/chooseus/chooseSave','AdminhomeController@saveChoose')->name('chooseInfoSave');
Route::get('/chooseus/chooseManage','AdminhomeController@manageChoose')->name('chooseInfoManage');
Route::post('/chooseus/chooseUpdate','AdminhomeController@updateChoose')->name('chooseInfoUpdate');
Route::get('/chooseus/chooseDelete/{id}','AdminhomeController@deleteChoose')->name('chooseInfoDelete');

Route::post('/chooseService/serviceSave','AdminhomeController@saveService')->name('serviceSaveChoose');
Route::get('/chooseService/serviceManage','AdminhomeController@manageService')->name('serviceManageChoose');
Route::post('/chooseService/serviceUpdate','AdminhomeController@updateService')->name('serviceUpdateChoose');
Route::get('/chooseService/serviceDelete/{id}','AdminhomeController@deleteService')->name('serviceDeleteChoose');

/*Admin Home Section End */

/*Start Blog Section */
Route::post('/blogCategory/Save','BlogController@saveBlogCat')->name('blogCatSave');
Route::get('/blogCategory/Manage','BlogController@manageBlogCat')->name('blogCatManage');
Route::post('/blogCategory/Update','BlogController@updateBlogCat')->name('blogCatUpdate');
Route::get('/blogCategory/Delete/{id}','BlogController@deleteBlogCat')->name('blogCatDelete');

Route::post('/blog/save','BlogController@saveBlog')->name('blogSave');
Route::get('/blog/manage','BlogController@manageBlog')->name('blogManage');
Route::patch('/blog/update/{id}','BlogController@updateBlog')->name('blogUpdate');
Route::get('/blog/delete/{id}','BlogController@deleteBlog')->name('blogDelete');

Route::get('/blogBanner/add','BlogController@createBlogBanner')->name('blogBannerAdd');
Route::post('/blogBanner/save','BlogController@saveBlogBanner')->name('blogBannerSave');
Route::get('/blogBanner/manage','BlogController@manageBlogBanner')->name('blogBannerManage');
Route::get('/blogBanner/delete/{id}','BlogController@deleteBlogBanner')->name('blogBannerDelete');
/*End Blog Section*/

/*Start Logo Section*/
Route::get('/logo/add','SliderlogoController@createLogo')->name('logoCreate');
Route::post('/logo/save','SliderlogoController@storeLogo')->name('logoStore');
Route::get('/logo/manage','SliderlogoController@manageLogo')->name('logoManage');
Route::get('/logo/delete/{id}','SliderlogoController@deleteLogo')->name('logoDelete');
/*End Logo Section*/

/*Slider Section*/
Route::post('/slider/save','SliderlogoController@storeSlider')->name('sliderSave');
Route::get('/slider/manage','SliderlogoController@manageSlider')->name('sliderManage');
Route::patch('/slider/update/{id}','SliderlogoController@updateSlider')->name('sliderUpdate');
Route::get('/slider/delete/{id}','SliderlogoController@deleteSlider')->name('sliderDelete');
/*Slider Section End*/

/*Tools Section*/
Route::post('/tools/toolsSave','SliderlogoController@saveTools')->name('toolsSave');
Route::get('/tools/toolsManage','SliderlogoController@manageTools')->name('toolsManage');
Route::patch('/tools/toolsUpdate/{id}','SliderlogoController@updateTools')->name('toolsUpdate');
Route::get('/tools/toolsDelete/{id}','SliderlogoController@deleteTools')->name('toolsDelete');
/*End Tools Section*/

/*Header Footer Information Section  */
Route::get('/hfinfo/add','SliderlogoController@createHfInfo')->name('hfInfoAdd');
Route::post('/hfinfo/save','SliderlogoController@storeHfInfo')->name('hfInfoSave');
Route::get('/hfinfo/manage','SliderlogoController@manageHfInfo')->name('hfInfoManage');
Route::post('/hfinfo/update/{id}','SliderlogoController@updateHfInfo')->name('hfInfoUpdate');
Route::get('/hfinfo/delete/{id}','SliderlogoController@deleteHfInfo')->name('hfInfoDelete');
/*Header Footer Information Section End*/
/*Contact Information Section */
Route::get('/contactInfo/contactAdd','ContactController@addContactInfo')->name('contactInfoAdd');
Route::post('/contactInfo/contactSave','ContactController@saveContactInfo')->name('contactInfoSave');
Route::get('/contactInfo/contactManage','ContactController@manageContactInfo')->name('contactInfoManage');
Route::post('/contactInfo/contactUpdate','ContactController@updateContactInfo')->name('contactInfoUpdate');
Route::get('/contactInfo/contactDelete/{id}','ContactController@deleteContactInfo')->name('contactInfoDelete');

Route::get('/contactPE/contactPEAdd','ContactController@addContactPE')->name('contactPEAdd');
Route::post('/contactPE/contactPESave','ContactController@saveContactPE')->name('contactPESave');
Route::get('/contactPE/contactPEManage','ContactController@manageContactPE')->name('contactPEManage');
Route::post('/contactPE/contactPEUpdate','ContactController@updateContactPE')->name('contactPEUpdate');
Route::get('/contactPE/contactPEDelete/{id}','ContactController@deleteContactPE')->name('contactPEDelete');
/*End Contact Information Section*/
/*Contact Us Banner Section */
Route::get('/contactBanner/add','ContactController@createContactBanner')->name('contactImageAdd');
Route::post('/contactBanner/save','ContactController@saveContactBanner')->name('contactImageSave');
Route::get('/contactBanner/manage','ContactController@manageContactBanner')->name('contactImageManage');
Route::get('/contactBanner/delete/{id}','ContactController@deleteContactBanner')->name('contactImageDelete');
/*Contact Us Banner Section End */

/*Portfolio section start */

Route::post('/portfolio/categorySave','PoteController@savePortCat')->name('portCatSave');
Route::get('/portfolio/categoryManage','PoteController@managePortCat')->name('portCatManage');
Route::post('/portfolio/categoryUpdate','PoteController@updatePortCat')->name('portCatUpdate');
Route::get('/portfolio/categoryDelete/{id}','PoteController@deletePortCat')->name('portCatDelete');

Route::post('/portfolio/portfolioSave','PoteController@savePortfolio')->name('portfolioSave');
Route::get('/portfolio/portfolioManage','PoteController@managePortfolio')->name('portfolioManage');
Route::post('/portfolio/portfolioUpdate','PoteController@updatePortfolio')->name('portfolioUpdate');
Route::get('/portfolio/portfolioDelete/{id}','PoteController@deletePortfolio')->name('portfolioDelete');

Route::get('/portfolio/backImageadd','PoteController@createBackImage')->name('imageCreate');
Route::post('/portfolio/backImagesave','PoteController@storeBackImage')->name('imageStore');
Route::get('/portfolio/backImagemanage','PoteController@manageBackImage')->name('imageManage');
Route::get('/portfolio/backImagedelete/{id}','PoteController@deleteBackImage')->name('imageDelete');
/*Portfolio Section End */

/*Product  Section start*/
Route::post('/product/categorySave','ProductController@saveCategory')->name('catSave');
Route::get('/product/categoryManage','ProductController@manageCategory')->name('catManage');
Route::post('/product/categoryUpdate','ProductController@updateCategory')->name('catUpdate');
Route::get('/product/categoryDelete/{id}','ProductController@deleteCategory')->name('catDelete');

Route::post('/product/Save','ProductController@saveProduct')->name('productSave');
Route::get('/product/Manage','ProductController@manageProduct')->name('productManage');
Route::patch('/product/Update/{id}','ProductController@updateProduct')->name('productUpdate');
Route::get('/product/Delete/{id}','ProductController@deleteProduct')->name('productDelete');
/*Product Section End */

/*Product Banner Section */
Route::get('/productBanner/add','ProductController@createProductBanner')->name('productImageAdd');
Route::post('/productBanner/save','ProductController@saveProductBanner')->name('productImageSave');
Route::get('/productBanner/manage','ProductController@manageProductBanner')->name('productImageManage');
Route::get('/productBanner/delete/{id}','ProductController@deleteProductBanner')->name('productImageDelete');
/*Product Banner Section End */

/*Testimonial Section start*/
Route::post('/testimonial/testimonialSave','PoteController@saveTestimonial')->name('testimonialSave');
Route::get('/testimonial/testimonialManage','PoteController@manageTestimonial')->name('testimonialManage');
Route::patch('/testimonial/testimonialUpdate/{id}','PoteController@updateTestimonial')->name('testimonialUpdate');
Route::get('/testimonial/testimonialDelete/{id}','PoteController@deleteTestimonial')->name('testimonialDelete');
/*Testimonial Section End */

/*Service Section Start */
Route::post('/service/categorySave','ServiceController@saveServiceCategory')->name('serviceCategorySave');
Route::get('/service/categoryManage','ServiceController@manageServiceCategory')->name('serviceCategoryManage');
Route::post('/service/categoryUpdate','ServiceController@updateServiceCategory')->name('serviceCategoryUpdate');
Route::get('/service/categoryDelete/{id}','ServiceController@deleteServiceCategory')->name('serviceCategoryDelete');

Route::post('/service/save','ServiceController@saveService')->name('serviceSave');
Route::get('/service/manage','ServiceController@manageService')->name('serviceManage');
Route::patch('/service/update/{id}','ServiceController@updateService')->name('serviceUpdate');
Route::get('/service/delete/{id}','ServiceController@deleteService')->name('serviceDelete');
/*Service Section End */

/*Packages Section Add */
Route::post('/package/categorySave','PackageController@savePackageCategory')->name('packageCategorySave');
Route::get('/package/categoryManage','PackageController@managePackageCategory')->name('packageCategoryManage');
Route::post('/package/categoryUpdate','PackageController@updatePackageCategory')->name('packageCategoryUpdate');
Route::get('/package/categoryDelete/{id}','PackageController@deletePackageCategory')->name('packageCategoryDelete');


Route::post('/package/save','PackageController@savePackage')->name('packageSave');
Route::get('/package/manage','PackageController@managePackage')->name('packageManage');
Route::post('/package/update','PackageController@updatePackage')->name('packageUpdate');
Route::get('/package/delete/{id}','PackageController@deletePackage')->name('packageDelete');
/*Packages Section End */

/*Price Manager--Hosting */
Route::post('/priceManage/hostingSave','PricemanagerController@saveHosting')->name('saveHosting');
Route::get('/priceManage/hostingManage','PricemanagerController@manageHosting')->name('manageHosting');
Route::post('/priceManage/hostingUpdate','PricemanagerController@updateHosting')->name('updateHosting');
Route::get('/priceManage/hostingDelete/{id}','PricemanagerController@deleteHosting')->name('deleteHosting');
/*End Price manager--Hosting*/

/*Price Manager--Content */
Route::post('/priceManage/contentSave','PricemanagerController@saveContent')->name('saveContent');
Route::get('/priceManage/contentManage','PricemanagerController@manageContent')->name('manageContent');
Route::post('/priceManage/contentUpdate','PricemanagerController@updateContent')->name('updateContent');
Route::get('/priceManage/contentDelete/{id}','PricemanagerController@deleteContent')->name('deleteContent');

/*End Price Manager--Content */

/****Order Manager*****/
Route::get('/orderManage/orderListCreate','OrdermanagerController@manageOrderList')->name('orderListManage');
/****Order Manager End*****/



/*****************=========Admin==================
===========================Panel====================
============================Route====================
============================End=====**************/