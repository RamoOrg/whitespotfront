<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>FAQ Section</title>
<!-- Added Font Awesome for icons -->

<style>
  .maindiv {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  grid-gap: 20px;
}

.content {
  order: 1; /* content card will appear first on mobile */
}

.image {
  order: 2; /* image will appear second on mobile */
}



  /* .maindiv {
    display: flex;
    justify-content: center;
    align-items: flex-start;
  } */
  .faq-container {
    max-width: 100%;
    margin: 20px;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
  }
  .faq-item {
    border-bottom: 1px solid #ccc;
    margin-bottom: 10px;
    transition: height 0.3s, width 0.3s;
  }
  .faq-question {
    cursor: pointer;
    font-weight: bold;
    padding: 15px;
    background-color: #f5f5f5;
    border-radius: 5px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: background-color 0.3s ease;
  }
  .faq-question:hover {
    background-color: #e0e0e0;
  }
  .faq-question i {
    font-size: 18px;
  }
  .faq-answer {
    overflow: hidden; /* Hide overflow */
    padding: 15px;
    max-height: 0; /* Initially hide the answers */
    transition: max-height 0.3s ease; /* Smooth transition */
  }
  .faq-item.active .faq-answer {
    max-height: 200px; /* Set the max-height to a value greater than the content's height */

  }
  .maindiv{
 justify-content: center;
 align-items: center;
  }
  .imagesection{
       box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
    border-radius: 10px;
  }
  @media (min-width: 768px) {
  .maindiv {
    grid-template-columns: 1fr 1fr; /* Two columns layout */
    align-items: start; /* Align items to the top */
  }

  .content {
    order: unset; /* Reset order for larger screens */
  }
}
.main {
  display: flex;
  justify-content: center;
  align-items: center;
}

.maindiv {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  grid-gap: 20px;
}
  
</style>
</head>
<body>
<div class="main">
  <div class="maindiv">
    <div class="content">
      <div class="faq-container">
        <div class="faq-item">
          <div class="faq-question">
            गुप्त रोग क्या है 
            <i class="fas fa-plus"></i>
          </div>
          <div class="faq-answer">
            <p>गुप्त रोग वे रोग होते हैं जो ज्यादातर यौन संबंधित होते हैं और लक्षणों को छिपा कर फैलते हैं। इनमें श्वेत प्रदर, सिफाइलिस, एचआईवी, जनरल, और एनलर्जी शामिल हो सकते हैं। इसलिए समय रहते इलाज लेना महत्वपूर्ण है, और इसे डॉक्टर की सलाह पर ही करें।</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            गुप्त रोग के लक्षण 
            <i class="fas fa-plus"></i>
          </div>
          <div class="faq-answer">
            <p>
              गुप्त रोगों के लक्षण जानना महत्वपूर्ण है क्योंकि ये रोग आमतौर पर गुप्त रहते हैं और व्यक्ति को स्पष्ट नहीं होते। इन रोगों के लक्षण लक्षणग्रहण और विशेषज्ञ की परामर्श की अवश्यकता होती है। गुप्त रोगों के लक्षण में जलन, खुजली, सूजन, यौन संबंधी समस्याएं, मूत्र या पेशाब में दर्द और जलन शामिल हो सकती है। ये रोग आमतौर पर असंवेदनशीलता के कारण स्पष्ट नहीं होते और उनका समय पर पहचान और उपचार करना महत्वपूर्ण है। समय रहते उपचार लेने से समस्या का समाधान सुविधाजनक होता है और व्यक्ति को आराम मिलता है। इसलिए, संवेदनशीलता के साथ लक्षणों का समय पर पहचान और उपचार करना जरूरी होता है।</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
          गुप्त रोग के आयुर्वेदिक इलाज
            <i class="fas fa-plus"></i>
          </div>
          <div class="faq-answer">
            <p>गुप्त रोगों का आयुर्वेदिक इलाज प्राकृतिक उपचारों पर आधारित होता है। इसमें आहार, व्यायाम, और ध्यान का महत्वपूर्ण योगदान होता है। आयुर्वेदिक चिकित्सा में त्रिदोष निर्माण और प्राकृतिक उपचार प्रदान किए जाते हैं। औषधियों का उपयोग, प्राणायाम, ध्यान, और योग के अभ्यास गुप्त रोगों के उपचार में सहायक हो सकते हैं। साथ ही, योगासनों के प्रयोग से शारीरिक और मानसिक संतुलन बनाए रखने के लिए भी कारगर होता है। इस तरह के प्राकृतिक उपचार रोगी को दिनचर्या में परिवर्तन करके उसकी सेहत को सुधार सकते हैं और उसे संतुलित जीवन जीने की दिशा में मदद कर सकते हैं।</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            गुप्त रोग दूर करने के उपाय 
            <i class="fas fa-plus"></i>
          </div>
          <div class="faq-answer">
            <p>गुप्त रोगों का आयुर्वेदिक इलाज प्राकृतिक उपचारों पर आधारित होता है। इसमें आहार, व्यायाम, और ध्यान का महत्वपूर्ण योगदान होता है। आयुर्वेदिक चिकित्सा में त्रिदोष निर्माण और प्राकृतिक उपचार प्रदान किए जाते हैं। औषधियों का उपयोग, प्राणायाम, ध्यान, और योग के अभ्यास गुप्त रोगों के उपचार में सहायक हो सकते हैं। साथ ही, योगासनों के प्रयोग से शारीरिक और मानसिक संतुलन बनाए रखने के लिए भी कारगर होता है। इस तरह के प्राकृतिक उपचार रोगी को दिनचर्या में परिवर्तन करके उसकी सेहत को सुधार सकते हैं और उसे संतुलित जीवन जीने की दिशा में मदद कर सकते हैं।</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            गुप्त रोग से बचाव के उपाय 
            <i class="fas fa-plus"></i>
          </div>
          <div class="faq-answer">
          <p> गुप्त रोग से बचाव के लिए नियमित स्वच्छता, सही आहार, नियमित व्यायाम, और स्वस्थ जीवनशैली अपनाना अत्यंत महत्वपूर्ण है। संभोग के समय सुरक्षित रहना और संवेदनशीलता बनाए रखना भी जरूरी है। यौन स्वास्थ्य की जांच नियमित रूप से कराना चाहिए और किसी भी संदेहजनक लक्षण पर तुरंत डॉक्टर से परामर्श लेना चाहिए। साथ ही, सामाजिक जागरूकता बढ़ाना और सही जानकारी प्राप्त करना भी गुप्त रोगों से बचाव में मददगार हो सकता है।
            </p>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const faqQuestions = document.querySelectorAll('.faq-question');

    faqQuestions.forEach(function(question) {
      question.addEventListener('click', function() {
        const parentItem = this.parentElement;
        parentItem.classList.toggle('active');
      });
    });
  });
</script>

</body>
</html>
