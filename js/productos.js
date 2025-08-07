const productos = {
  pepsi: {
    product: "Pepsi",
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
      "Caffeine",
      "Citric Acid",
      "Natural Flavor"
    ]
  },
  "pepsi-diet": {
    product: "Pepsi Diet",
    servingSize: "12 fl oz",
    servingsPerContainer: 1,
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
  "pepsi-caffeine-free": {
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
  ]
}
};

  document.addEventListener("DOMContentLoaded", () => {
    const contenedor = document.getElementById("etiqueta");
    if (contenedor) {
      contenedor.innerHTML = `<h1>HOLA HOLA HOLA</h1>`;
    }
  });
