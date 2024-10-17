function addActivity() {
    const activityInput = document.getElementById('activity-input');
    const activityList = document.getElementById('activity-list');

    if (activityInput !== ""){
        const li = document.createElement('li')

        const textValue = document.createElement('span')
        textValue.textContent = activityInput.value

        const completeButton = document.createElement('button')
        completeButton.textContent = 'dah'
        completeButton.classList.add('complete')
        completeButton.onclick = () => {
            li.classList.toggle('completed')
        }

        const deleteButton = document.createElement('button')
        deleteButton.textContent = 'apus'
        deleteButton.onclick = () =>{
            let userResponse = confirm('lanjut ga')

            if(userResponse){
                activityList.removeChild(li)
            }
        }

        li.appendChild(textValue)
        li.appendChild(completeButton)
        li.appendChild(deleteButton)

        activityList.appendChild(li)

        activityInput.value = ""
    }
    else{
        alert("jgn kosongin woila")
    }
}




