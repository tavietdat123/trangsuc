const $ = document.querySelector.bind(document)
const $$ = document.querySelectorAll.bind(document)
const imgslider = $('.slide__img')
const slider = $('.slider')
const btnnextslide = $('.btn_next_slide')
const btnprevslide = $('.btn_prev_slide')
const hometrendinglist = $('.home_trending_list')
const hometrendingprev = $('.home_trending_prev')
const hometrendingnext= $('.home_trending_next')
const hometrendingitem = $$('.home_trending_item')
const producttrendingitem =$$('.product_trending_item')
const collectionproductitem =$$('.collection_product_item')
const newhometrendingitem =  Array.from(hometrendingitem)
const newhomeprdtrenditem =  Array.from(producttrendingitem)
const newhomecollectionitem =  Array.from(collectionproductitem)


 const scrollSlider= {
    currentindex:1,
    indexhometrending:0,
    indexprdtrend:0,
    indexcollection:0,
    next(){
        this.currentindex++
        if(this.currentindex > 3){
            this.currentindex =0
        }
    },
    prev(){
        this.currentindex--
        if(this.currentindex < 0){
            this.currentindex =3
        }
    },nexttrending(){
        this.indexhometrending++
        if(this.indexhometrending > newhometrendingitem.length -6){
            this.indexhometrending = 0
            }
    },prevtrending(){
        this.indexhometrending--
    if(this.indexhometrending < 0){
    this.indexhometrending = newhometrendingitem.length -6
    }
        
    },nextprdtrend(){
        this.indexprdtrend++
        if(this.indexprdtrend > newhomeprdtrenditem.length -4){
            this.indexprdtrend = 0
            }
    },prevprdtrend(){
        this.indexprdtrend--
    if(this.indexprdtrend < 0){
    this.indexprdtrend = newhomeprdtrenditem.length -4
    }
        
    },
    nextcollection(){
        this.indexcollection++
        console.log(newhomecollectionitem.length )
        if(this.indexcollection > newhomecollectionitem.length -3){
            this.indexcollection = 0
            }
    },prevcollection(){
        this.indexcollection--
    if(this.indexcollection < 0){
    this.indexcollection = newhomecollectionitem.length -3
    }
        
    },
    handle(){
        const interval = setInterval(()=>{
          const size =  imgslider.offsetWidth *this.currentindex
          slider.style.transform = `translateX(-${size}px)`
          this.next()

    },3000)

    btnnextslide.onclick = ()=>{
        this.prev()
        const size =  imgslider.offsetWidth *this.currentindex
          slider.style.transform = `translateX(-${size}px)`
          
        clearInterval(interval)

    }
    btnprevslide.onclick = ()=>{
        this.next()
        const size =  imgslider.offsetWidth *this.currentindex
          slider.style.transform = `translateX(-${size}px)`
         
        clearInterval(interval)
    }
     
    hometrendingprev.onclick = ()=>{
    this.prevtrending()
    const size1 = 200 * this.indexhometrending
    hometrendinglist.style.transform = `translateX(-${size1}px)`
    }
    hometrendingnext.onclick = ()=>{
        this.nexttrending()
    const size1 = 200 * this.indexhometrending
    hometrendinglist.style.transform = `translateX(-${size1}px)`
    }
    const producttrendinglist = $('.product_trending_list')
    const producttrendingprev =$('.product_trending_prev')
    const producttrendingnext =$('.product_trending_next')
    producttrendingprev.onclick = ()=>{
        this.prevprdtrend()
        const size1 = 280 * this.indexprdtrend
        producttrendinglist.style.transform = `translateX(-${size1}px)`
    }
    producttrendingnext.onclick = ()=>{
        this.nextprdtrend()
        const size1 = 280 * this.indexprdtrend
        producttrendinglist.style.transform = `translateX(-${size1}px)`
    }

    const collectionlist = $('.collection_list')
    const collectionprev = $('.collection_prev')
    const collectionnext = $('.collection_next')
    collectionprev.onclick = ()=>{
        this.prevcollection()
        
        const size1 = 253 * this.indexcollection
        collectionlist.style.transform = `translateX(-${size1}px)`
    }
    collectionnext.onclick = ()=>{
        this.nextcollection()
        const size1 = 253 * this.indexcollection
        collectionlist.style.transform = `translateX(-${size1}px)`
    }

    },
    start(){
        this.handle()
    }
}
scrollSlider.start()
