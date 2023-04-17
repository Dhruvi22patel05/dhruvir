let jsondata =

{
    Module1:

    {
        Assignment:
        {
            'Assignment1': './index.php'
        }
    },


    Module2:

    {
        Assignment:
        {
            'Assignment1': './index.php',
            'Assignment2': './index.php',
            'Assignment3': './index.php',
            'Assignment4': './index.php'
        }
    },

    Module3:
    {
        Assignment:
        {
            'Assignment1': './index.php'
            
        }
        ,

        Practice:
        {
            'Practice1': './index.php'

        }

    },


    Module4:

    {

        Practice:
        {
            'Practice1': './index.php',
            'Practice2': './index.php',
            'Practice3': './index.php'

        }

    }

}


let acc = "";
for (let [key, value] of Object.entries(jsondata)) {
    acc += `
            <div class="accordion-item mt-2">
            <h2 class="accordion-header">
            <button class="accordion-button text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#${key}" aria-expanded="true" aria-controls="collapseOne"><span><img
            src="../img/icons8-assignment-50.png" class="img-fluid me-2 " alt="Assignmenticon"></span>
            ${key}
            </button>
            </h2>`
    acc += ` <div id="${key}" class="accordion-collapse collapse searchcollapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">`
    for (let [key1, value1] of Object.entries(value)) {



        acc += ` <ul>
                 <li>${key1}</li>
                 <ul class="pt-2">`

        for (let [key2, value2] of Object.entries(value1)) {

            acc += `
                        <li><a href="${value2}" class="text-decoration-none  text-dark">${key2}</a></li>
                    
                  `
        }

        acc += '</ul></ul>'


    }
    acc += ` 
        </div>
        </div>
      </div> 
      `

    //    console.log(value.Assignment);
}

document.getElementById('accordionExample').innerHTML = acc;