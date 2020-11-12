const months = {

  10: "October",
  11: "November",
  12: "December"
}
let [month, date, year] = (new Date()).toLocaleDateString().split("/")
let dateString = `${months[month]} ${date}, ${year}`

document.getElementById('date').innerHTML = dateString