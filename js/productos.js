const productos =[
  {
    product: "Pepsi",
    servingSize: "12 fl oz",
    servingsPerContainer: 1,
    img: 'css/images/pepsi-pdp.jpeg',
    nutritionFacts: {
      calories: 150,
      totalFat: { value: 0, unit: "g", dailyValuePercent: "0%" },
      sodium: { value: 30, unit: "mg", dailyValuePercent: "1%" },
      totalCarbohydrate: { value: 41, unit: "g", dailyValuePercent: "14%" },
      sugars: { value: 41, unit: "g" },
      protein: { value: 0, unit: "g" }
    },
    ingredients: [
      "Carbonated Water",
      "High Fructose Corn Syrup",
      "Caramel Color",
      "Sugar",
      "Phosphoric Acid",
      "Caffeine",
      "Citric Acid",
      "Natural Flavor"
    ]
  },
  {
    product: "Pepsi Diet",
    servingSize: "12 fl oz",
    servingsPerContainer: 1,
    img: 'css/images/diet-pepsi-pdp.jpeg',
    nutritionFacts: {
      calories: 0,
      totalFat: { value: 0, unit: "g", dailyValuePercent: "0%" },
      sodium: { value: 35, unit: "mg", dailyValuePercent: "2%" },
      totalCarbohydrate: { value: 0, unit: "g", dailyValuePercent: "0%" },
      sugars: { value: 0, unit: "g" },
      protein: { value: 0, unit: "g" }
    },
    ingredients: [
      "Carbonated Water",
      "Caramel Color",
      "Aspartame",
      "Phosphoric Acid",
      "Caffeine",
      "Citric Acid",
      "Natural Flavor"
    ]
  },
  {
  product: "Pepsi Caffeine Free",
  servingSize: "12 fl oz",
  servingsPerContainer: 1,
  nutritionFacts: {
    calories: 150,
    totalFat: { value: 0, unit: "g", dailyValuePercent: "0%" },
    sodium: { value: 30, unit: "mg", dailyValuePercent: "1%" },
    totalCarbohydrate: { value: 41, unit: "g", dailyValuePercent: "14%" },
    sugars: { value: 41, unit: "g" },
    protein: { value: 0, unit: "g" }
  },
  ingredients: [
    "Carbonated Water",
    "High Fructose Corn Syrup",
    "Caramel Color",
    "Sugar",
    "Phosphoric Acid",
    "Citric Acid",
    "Natural Flavor"
  ]}
]

function armarHtml(producto){
    const contenedor = document.getElementById("etiqueta");
    const imgPepsi = document.getElementById("img-pepsi");

    imgPepsi.src = producto.img;
    contenedor.innerHTML = `
      <h1 class="etih1">${producto.product}</h1>
      <hr class="etihr">
      <h1 class="etih2">NUTRITION FACTS</h1>
      <hr class="etihr2">
      <br>
      <p class="etip1">Serving Size ${producto.servingSize}<br>
      Servings Per Container ${producto.servingsPerContainer}<br><br>
      Amount Per Serving</p>
      <hr class="etihr">
      <p class="etip2">% Daily Value *</p>
      <div class="etidiv">
        <p class="etip1">Calories ${producto.nutritionFacts.calories}</p>
        
        <div class="etidiv1">
          <p class="etip1">Total Fat ${producto.nutritionFacts.totalFat.value}${producto.nutritionFacts.totalFat.unit}</p>
          <p class="etip1">${producto.nutritionFacts.totalFat.dailyValuePercent}</p>
        </div>
        
        <div class="etidiv2">
          <p class="etip1">Sodium ${producto.nutritionFacts.sodium.value}${producto.nutritionFacts.sodium.unit}</p>
          <p class="etip1">${producto.nutritionFacts.sodium.dailyValuePercent}</p>
        </div>
        
        <div class="etidiv3">
          <p class="etip1">Total Carbohydrate ${producto.nutritionFacts.totalCarbohydrate.value}${producto.nutritionFacts.totalCarbohydrate.unit}</p>
          <p class="etip1">${producto.nutritionFacts.totalCarbohydrate.dailyValuePercent}</p>
        </div>
        
        <p class="etip1">Sugars ${producto.nutritionFacts.sugars.value}${producto.nutritionFacts.sugars.unit}</p>
        <p class="etip1">Protein ${producto.nutritionFacts.protein.value}${producto.nutritionFacts.protein.unit}</p>
      </div>
      <hr class="etihr">
      <br>
      <p class="etip4">${producto.ingredients.join(', ').replace(/,([^,]*)$/, ' and$1')}</p>
      <br>
      <a href="https://www.pepsicoproductfacts.com/Home/Product?formula=35005*26*01-01&form=RTD&size=12" class="etia">MORE NUTRITIONAL INFO</a>`;
  }


document.addEventListener("DOMContentLoaded", () => {
  let idx = 0;
  
  let producto = productos[idx];
  armarHtml(producto);

  let btnIzq = document.getElementById('fiz');
  let btnDer = document.getElementById('fde');

   btnIzq.addEventListener("click", function(e){
    if(idx -1 < 0){
      alert("No se puede retroceder");
      return;
    }
    idx--;
    let producto = productos[idx];
    armarHtml(producto);
  })

  btnDer.addEventListener("click", function(e){
    idx++;
    let producto = productos[idx];
    armarHtml(producto);
  })
});
