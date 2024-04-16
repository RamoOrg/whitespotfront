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
            गठिया क्या है?
            <i class="fas fa-plus"></i>
          </div>
          <div class="faq-answer">
            <p>हड्डियों के जोड़ों में यूरिक एसिड जमा होने या फिर कैल्शियम की कमी होने पर उनमें सूजन व अकड़न आ जाती है। साथ ही जोड़ों में गांठ और कांटे चुभने जैसा महसूस होता है। साथ ही जोड़ों में मौजूद टिश्यू भी टूटकर नष्ट होने लगते हैं। इस अवस्था को ही गठिया कहा जाता है। जोड़ उन्हें कहा जाता हैमा होने या फिर कैल्शियम की कमी होने पर उनमें सूजन व अकड़न आ जाती है।</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            गठिया के लक्षण |
            <i class="fas fa-plus"></i>
          </div>
          <div class="faq-answer">
            <p>जोड़ों में सूजन और दर्द गठिया रोग के लक्षण हैं। इसके अलावा, अन्य लक्षण भी हो सकते हैं, 
              सूजन व दर्द के कारण चलना-फिरना मुश्किल हो जाता है।
              कुछ लोगों में सुबह के समय यह दर्द ज्यादा होता है।
              प्रभावित जगह लाल रंग की हो जाती है।
              जिस जगह गठिया हुआ है, उस जोड़ में भारीपन महसूस हो सकता है।
              जल्दी थकान हो जाना और इम्यून सिस्टम का कमजोर होना।
              पीड़ित व्यक्ति को बार-बार बुखार आ सकता है।
              जोड़ों के आसपास गांठें भी बन सकती हैं।</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            गठिया के घरेलू इलाज
            <i class="fas fa-plus"></i>
          </div>
          <div class="faq-answer">
            <p>1. हल्दी
              हल्दी को आयुर्वेद में गठिया का रामबाण इलाज माना जाता है। दरअसल, यह एक प्राकृतिक एंटीसेप्टिक है, जिसमें करक्यूमिनोइड नामक तत्व पाए जाते हैं। इनके कारण हल्दी में एंटीआर्थराइटिक और एंटीइन्फ्लामेट्री गुण भी मौजूद होता है।
              2. अदरक
              गठिया की समस्या से राहत पाने के लिए अदरक का उपयोग भी किया जा सकता है। यह सूजन को दूर करने का काम कर सकता है। यही वजह है कि इसे गठिया के घरेलू उपचार के तौर पर भी इस्तेमाल में लाया जा सकता है। 
              3. मेथी
              जहां मेथी खाने का स्वाद बढ़ा देती है, वहीं यह कई प्रकार की बीमारियों से लड़ने में मदद कर सकती है। इसे एंंटीइंफ्लेमेटरी और एंटी आर्थराइटिक का प्रमुख स्रोत माना गया है। यही वजह है कि इसे आयुर्वेद में गठिया का रामबाण इलाज भी कहा जाता है। वैज्ञानिकों के अनुसार मेथी के दानों में पेट्रोलियम ईथर एक्सट्रेक्ट होता है, जिस कारण ये गठिया के चलते जोड़ों में आई सूजन को कम करने में मदद कर सकते हैं।
              4. लहसुन
              गठिया के उपचार से जुड़े कई अध्ययनों में पाया गया है कि लहसुन में एंटीइंफ्लेमेटरी गुण होता है, जिस कारण यह जोड़ों में दर्द व सूजन को कम कर सकता है। इसके अलावा, लहसुन में डायलाइल डाइसल्फाइड, एलेसिन, एजोएन और सेलेनियम जैसे तत्व भी होते हैं।
              5. अश्वगंधा
              गठिया रोग का इलाज करने के लिए अश्वगंधा को भी उपयोग किया जा सकता है। इस आयुर्वेदिक जड़ी-बूटी के सेवन से शरीर की रोग प्रतिरोधक क्षमता बेहतर हो सकती है और ताकत मिलती है।</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            गठिया (आर्थराइटिस) के लिए डाइट प्लान
            <i class="fas fa-plus"></i>
          </div>
          <div class="faq-answer">
            <p>गठिया रोग के लक्षण और उसका घरेलू इलाज जानने के साथ ही गठिया के लिए डाइट प्लान को समझना भी जरूरी है। डाइट प्लान बनाते वक्त निम्न चीजों को आहार में शामिल किया जा सकता है, जो एंटीइन्फ्लामेट्री (सूजन कम करने वाले) प्रभाव के कारण इस समस्या में राहत पहुंचा सकते हैं (28)।
              फल : आलूबुखारा (प्लम), ग्रेपफ्रूट, अंगूर, ब्लूबेरी, अनार, आम, केला, सेब और आड़ू।
              सीरल्स : ओटमील, गेंहू की रोटी या पोहा (flattened rice)।
              फलियां : काली सोयाबीन या काला चना।
              साबुत अनाज : गेंहू, चावल, ओट्स, कॉर्न, जौ, बाजरा या कैनेरी सीड्स।
              अन्य : दही, ग्रीन टी या तुलसी की चाय।</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            गठिया (आर्थराइटिस) से बचाव 
            <i class="fas fa-plus"></i>
          </div>
          <div class="faq-answer">
          <p>  निम्न बिंदुओं के माध्यम से हम गठिया से बचाव के उपायों को आसानी से समझ सकते हैं |
नियमित आठ से दस घंटे की नींद लें।
एक ही स्थिति में बैठने या खड़े रहने से बचें।
उस स्थिति में बैठने या गति करने से बचें जिससे प्रभावित जोड़ पर तनाव आ सकता हो।
विटामिन और मिनरल्स से भरपूर सब्जियों और फलों का सेवन करें। खासकर जिनमें विटामिन-ई मौजूद हो।
ओमेगा-3 फैटी एसिड युक्त खाद्य पदार्थों को आहार में जगह दें जैसे :- अलसी, सोयाबीन, कद्दू के बीज और अखरोट। इसके साथ ही कैनोला और सोयाबीन ऑयल को भी उपयोग में ला सकते हैं।
धूम्रपान और शराब से गठिया रोग में परहेज किया जाना चाहिए।
वहीं, बचाव के लिए गठिया रोग मे परहेज के साथ वजन को नियंत्रित करना भी जरूरी है।
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
