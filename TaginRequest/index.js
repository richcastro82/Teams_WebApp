Survey
    .StylesManager
    .applyTheme("modern");

var json = {
    "title": "TAGin Tracker",
    "description": "The Acheson Group",
    "logo": "https://foodsafetyconsulting.com/wp-content/uploads/2020/11/Untiqwetled-1-05-e1609003958913.png",
    "logoWidth": 140,
    "logoHeight": 100,
    "questions": [
        {
            "name": "client",
            "type": "text",
            "title": "Company Name:",
            "placeHolder": "The Acheson Group",
            "isRequired": true
        }, {
            "name": "contact",
            "type": "text",
            "title": "Please enter your name:",
            "placeHolder": "Richard Castro",
            "isRequired": true
        },  {
            "name": "address",
            "type": "text",
            "title": "Address of Assessment:",
            "placeHolder": "123 Main Street",
            "isRequired": false
        },{
            "name": "assess_date",
            "type": "text",
            "inputType": "date",
            "title": "Date of Assessment:",
            "isRequired": true
        }, {
            "name": "return_date",
            "type": "text",
            "inputType": "date",
            "title": "Date of Return:",
            "isRequired": false
        }, {
            "name": "email",
            "type": "text",
            "inputType": "email",
            "title": "Your e-mail:",
            "placeHolder": "support@AchesonGroup.com",
            "isRequired": true,
            "validators": [
                {
                    "type": "email"
                }
            ]
        }
    ]
};

window.survey = new Survey.Model(json);

survey
    .onComplete
    .add(function (result) {
        document
            .querySelector('#surveyResult')
            .textContent = "Result JSON:\n" + JSON.stringify(result.data, null, 3);
    });

$("#surveyElement").Survey({model: survey});
