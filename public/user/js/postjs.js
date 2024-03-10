let isList=false;
let content="";
const addPara = () => {
    let content = document.getElementById("paras").value;
    console.log(content);
    let newContent = content.split("\n\n");
    console.log(newContent);    
}

const setContent = (element) =>{
    console.log(element);
    // content += element.value[element.value.length-1];
    // let lastElement = content[content.length-1];
    // let nextToLastElement = content[content.length-2];
   
    // if(lastElement=="\n" &&nextToLastElement=="\n"){
    //     content+="</li>";
    //     content+=listType;
    //     isList=false;
    //     console.log("New Para");
    // }
    // else if(lastElement=="\n" && isList){
    //     console.log("New line for list");
    //     content += "</li><li>";
    // }
    // else if(lastElement=="\n" && !isList){
    //     console.log("New line for para");
    // }
    // document.getElementById("content").innerHTML = content;
    // console.log(content);
}

let listType;
const addList = () =>{
    isList = true;
    let list = document.getElementsByClassName("list");
    console.log(list);
    if(list[0].checked){
        listType="</ol>"
        content+="<ol>"
        console.log("ol");
    }
    else{
        listType="</ul>"
        content+="<ul>";
        console.log("ul");
    }
}

