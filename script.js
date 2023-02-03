// async function getProdLine(){
//     const response = await fetch ("http://localhost/dash/DashbordV5/index.php")
//     const data = await response.json()
//     // console.log(data[0].prod_line)
//     console.log(data)

//     document.querySelector("#PL").innerHTML = "<h1>" + data[0].prod_line + "</h1>"
// }
// getProdLine()

async function getEngage(){
    const response = await fetch ("http://localhost/dash/DashbordV5/index.php");
    const data = await response.json()
    //console.log(data)
    console.log(data.qengaged)
    console.log(document.querySelector("#Qte"));
    

    document.querySelector("#Qte").innerHTML = "<h1>" + data.qengaged + "</h1>"
}
getEngage()

 async function getEncours(){
    const response = await fetch ("http://localhost/dash/DashbordV5/index.php");
    const data = await response.json()
    console.log(data)

    console.log(data.qencours)
    console.log(document.querySelector("#Encours"));
 }
getEncours()

// async function getFab(){
//     const response = await fetch ("http://localhost/digitex_isatest/_API/php/")
//     const data = await response.json()
//     console.log(data[0].qfab)

//     document.querySelector("#fab").innerHTML = "<h1>" + data[0].qfab + "</h1>"
// }
// getFab()
// async function getControl(){
//     const response = await fetch ("http://localhost/digitex_isatest/_API/php/")
//     const data = await response.json()
//     console.log(data[0].cq)

//     document.querySelector("#cq").innerHTML = "<h1>" + data[0].cq + "</h1>"
// }
// getControl()
// async function getPerformance(){
//     const response = await fetch ("http://localhost/digitex_isatest/_API/php/")
//     const data = await response.json()
//     console.log(data[0].performance)

//     document.querySelector("#perf").innerHTML = "<h1>" + data[0].performance + "</h1>"
// }
// getPerformance()
