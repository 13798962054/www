var toggleMenu = function(){
	if (swiper.previousIndex == 0)
		swiper.slidePrev()
} 
, swiper = new Swiper('#left-menu', {
	slidesPerView: 'auto', 
	initialSlide: 1, 
	resistanceRatio: .00000000000001, 
	slideToClickedSlide: true
})



new Swiper(".cubePic",{
	loop:true,
	autoplay: 5000,//可选选项，自动滑动
	effect:'cube',
	cube:{
		shadow:false
	}
})


new Swiper('#content', {
    pagination: '.swiper-pagination',
    paginationClickable: true,
    direction: 'vertical',
    mousewheelControl:true
});