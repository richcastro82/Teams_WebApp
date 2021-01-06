Survey.StylesManager.applyTheme("modern");

var surveyJSON = {title:"Bug Report",description:"This form will help us keep track of the bugs in the system. ",logo:"https://api.surveyjs.io/private/Surveys/files?name=6d61651f-6a47-43fa-bbcc-7216a6c2a110",pages:[{name:"Your system",elements:[{type:"checkbox",name:"question1",title:"What Operating System are you using?",choices:[{value:"item1",text:"Windows"},{value:"item2",text:"Linux"},{value:"item3",text:"MacOS"},{value:"item4",text:"IOS"},{value:"item5",text:"Andriod OS"}]},{type:"checkbox",name:"question2",title:"What type of device?",choices:[{value:"item1",text:"Desktop"},{value:"item2",text:"Phone"},{value:"item3",text:"Tablet"}],hasOther:true},{type:"checkbox",name:"question3",title:"What browser are you  using?",choices:[{value:"item1",text:"Chrome"},{value:"item2",text:"Edge"},{value:"item3",text:"IE"},{value:"item4",text:"Safari"}],hasOther:true}]},{name:"The Issue",elements:[{type:"text",name:"question4",title:"Please describe the issue"},{type:"file",name:"question5",title:"Attach a photo of the issue",maxSize:0}]}]}

function sendDataToServer(survey) {
    survey.sendResult('131342c8-419e-4347-bb0b-2c24fdad342b');
}

var survey = new Survey.Model(surveyJSON);
$("#surveyContainer").Survey({
    model: survey,
    onComplete: sendDataToServer
});
