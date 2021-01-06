Survey
    .StylesManager
    .applyTheme("modern");

var json = {
    surveyId: '6d61651f-6a47-43fa-bbcc-7216a6c2a110',
    surveyPostId: '131342c8-419e-4347-bb0b-2c24fdad342b'
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
