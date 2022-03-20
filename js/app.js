const txtItem = document.querySelector('#txtItem')
const containerItems = document.querySelector('#container_items')

const cargarItems = () => {
   fetch('./BACKEND/Operations.php?consulta')
   .then(response => response.json())
   .then(data => {
      let template = ''
      data.forEach(item => {
         template  += `
         <tr class="text-center">
            <td>${item.item}</td>
            <td><button class="btnDelete" value='${item.id}' onclick="deleteItem(event)">X</button></td>
         </tr>`
      })
      containerItems.innerHTML = template
   })
   .catch(error => console.error(error))

}

addEventListener('load', e => {
   cargarItems()
})

const deleteItem = e => {
   const idItem = e.target.getAttribute('value')
   fetch(`./BACKEND/Operations.php?delete=${idItem}`)
   .then(response => response.text())
   .then(respuesta => {
      if(respuesta === 'OK')
         cargarItems()
   })

}

txtItem.addEventListener('keyup', e => {
   if(e.keyCode === 13){
      let data = new FormData()
      data.append('item',e.target.value)

      fetch('./BACKEND/Operations.php',{
         method:'post',
         body:data
      })
      .then(response => response.text())
      .then(respuesta => {
         if(respuesta === 'OK')
            cargarItems()
      })

      txtItem.value = ""
      txtItem.focus()
   }
})
