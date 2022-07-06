const Button = document.querySelectorAll(".btn__category")
const Card =document.querySelectorAll(".card")

const Filter =(category,items)=>{
    items.forEach((item)=>{
        const cardFiltered = !item.classList.contains(category)
        if(cardFiltered && category != 'all'){
            item.classList.add("hide")
        }
        else{
            item.classList.remove("hide")
        }
    })
}

Button.forEach((item)=>{
    item.addEventListener("click",()=>{
        Filter(item.dataset.filter, Card)
    })
})