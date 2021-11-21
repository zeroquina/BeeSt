jQuery(function ($) {
    new WOW().init();

     // delay,duration,iterationの設定
  $("[class*='data-wow-']").each(function(){
    const dataArray = ["delay", "duration", "iteration"];
    let elem = $(this);
    let elemClass = elem.attr("class");
    let elemClasses = elemClass.split(" ");
    let count = 0;
    for(let i=0; i<elemClasses.length; i++){
      let className = elemClasses[i];
      for (let n = 0; n < dataArray.length; n++){
        let wowKey = "data-wow-" + dataArray[n];
        if(className.indexOf(wowKey + "-") != -1){
          let wowValue = className.replace(wowKey + "-", "");
          elem.attr(wowKey, wowValue);
          count++;
        }
      }
      if (count == dataArray.length) break;
    }
  });

  // data-wow-offsetの設定
  var wh = $(window).height();
  $("[class*='wow-of-']").each(function(){
    let elem = $(this);
    let elemClass = elem.attr("class");
    let elemClasses = elemClass.split(" ");
    for (let i = 0; i < elemClasses.length; i++) {
      let className = elemClasses[i];
      if (className.indexOf("wow-of-") != -1) {
        let wowValue = className.replace("wow-of-", "");
        let offsetKey = wh / wowValue;
        elem.attr("data-wow-offset", offsetKey);
      }
    }
  });
  });