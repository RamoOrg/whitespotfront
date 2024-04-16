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
    max-width: 600px;
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
  /* .maindiv{
    border: 2px solid red;
  } */
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

  .image {
    margin-top: 20px;
    order: unset; /* Reset order for larger screens */
  }
}
  
</style>
</head>
<body>
<div class="main">
<div class="main">
  <div class="maindiv">
    <div class="content">
      <div class="faq-container">
        <div class="faq-item">
          <div class="faq-question">
            सफेद दाग क्या होता है? 
            <i class="fas fa-plus"></i>
          </div>
          <div class="faq-answer">
            <p>आयुर्वेद के अनुसार वात, पित्त और कफ यानि त्रिदोषज के कारण ही सभी प्रकार के त्वचा के रोग होते हैं फिर भी दोषों के अपने निजी लक्षणों से उनकी सबलता तथा निर्बलता की समीक्षा (diagnosis) कर उसके अनुसार चिकित्सा की जाती है। जिस दोष के लक्षण को विशेष रूप से बढ़े हुए नजर आते हैं उसकी चिकित्सा पहले की जाती है। ये वात, कफ की प्रधानता होने पर होते हैं।</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            सफेद दाग के शुरूआती लक्षण
            <i class="fas fa-plus"></i>
          </div>
          <div class="faq-answer">
            <p>सफेद दाग की पहचान में सबसे शुरुआती लक्षण है, त्वचा का रंग फीका पड़ना और उस जगह पर बाल भी सफेद होना। शरीर पर अगर सफेद दाग हो जाये और उसके बाद कहीं चोट लगे और वो जगह भी सफेद हो जाये तब आपको समझ जाना चाहिए कि ये समस्या तेजी से शरीर में बढ़ रही है। ल्यूकोडर्मा का रोग कोई सरलता से ठीक होने वाला रोग नहीं है और न ही ये छूने से फैलता है। आयुर्वेदिक तरीके से उपाय करके इस समस्या को ठीक कर सकते हैं।</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            सफेद दाग के कारण 
            <i class="fas fa-plus"></i>
          </div>
          <div class="faq-answer">
            <p>एलोपेशिया एरियाटा (Alopecia Areata) यानी वह बीमारी, जिसमें छोटे-छोटे गोले के रूप में शरीर से बाल गायब होने लगते हैं। सफेद दाग मस्से या बर्थ मार्क (Halo Nevus) से। मस्सा या बर्थ मार्क बच्चे के बड़े होने के साथ-साथ आस-पास की स्किन का रंग बदलना शुरू कर देता है।
    
              -केमिकल ल्यूकोडर्मा (Chemical Leucoderma) यानी खराब क्वालिटी की चिपकाने वाली बिंदी या खराब प्लास्टिक की चप्पल या जूते इस्तेमाल करने से।
              
              -ज्यादा केमिकल एक्सपोजर यानी प्लास्टिक, रबर या केमिकल फैक्ट्री में काम करने वाले लोगों को खतरा ज्यादा होता है। कीमोथेरेपी से भी इसकी आशंका रहती है।
              
              –थाइरॉयड संबंधी बीमारी होने पर।
              
              -कई बार शरीर में जरूरी मात्रा में विटामिन्स व मिनिरल्स की कमी से भी सफेद दाग की समस्या हो जाती है। संतुलित डायट न लेने की वजह से शरीर की त्वचा के रंग से थोड़े हल्के रंग के दाग हो सकते हैं। ये दाग पूरी तरह सफेद नहीं दिखते।
              
              -कई बार किसी फंगल संक्रमण के परिणामस्वरूप भी त्वचा पर सफेद दाग की समस्या होती है।
              
              -त्वचा में सफेद दाग तब बनने लगते हैं जब रंग उत्पादन करने वाली कोशिका जो हमारे बाल, त्वचा, होंठ आदि को रंग प्रदान करती है वो काम करना बंद कर देती है या नष्ट हो जाती है। इस रोग में दाग की त्वचा का रंग हल्का पड़ जाता है या सफेद हो जाता है। इस बारे में अभी तक चिकित्सक भी नही जान पाये कि ये कोशिका काम करना क्यों बंद कर देती है। आमतौर इस इसको कुछ कारणों से जोड़ा जाता है जैसे-
              
              -एक ऐसा विकार होना जिससे शरीर की प्रतिरक्षा प्रणाली (Immune system) खुद रंग उत्पादन करने वाली कोशिकाओं को नष्ट कर देती है।
              
              -स्व प्रतिरक्षा रोग (Autoimmune disease) जैसे स्वप्रतिरक्षित थायरॉइड रोग या टाइप 1 डायबीटीज का प्रभाव।
              
              -त्वचा का अधिक धूप (सनबर्न), तनाव या औद्योगिक केमिकल आदि के संपर्क में आना।</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            सफेद दाग बचने के उपाय
            <i class="fas fa-plus"></i>
          </div>
          <div class="faq-answer">
            <p>आयुर्वेद के अनुसार, पित्त या इसके साथ बाकी वातों की गड़बड़ी से सफेद दाग की समस्या होती है। जो लोग बहुत ज्यादा तला-भुना, मसालेदार, बेवक्त खाने के अलावा विरुद्ध आहार (मसलन दूध के साथ नमक या मछली आदि) लेता है, उसमें यह समस्या होने की आशंका ज्यादा होती है। आयुर्वेद में पंचकर्म के जरिए शरीर को डिटॉक्सिफाई किया जाता है। इसके अलावा बाकुची बीज, खदिर (कत्था), दारुहरिद्रा, करंज, आरग्वध (अमलतास) आदि सिंगल हर्ब्स के जरिए भी खून को साफ किया जाता है। इसके अलावा कंपाउंड मेडिसिन भी दी जाती है जैसे कि गंधक रसायन, रस माणिक्य, मंजिष्ठादि काढ़ा, खदिरादि वटी आदि है। त्रिफला भी काफी असरदार है।.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            सफेद दाग के घरेलू उपाय
            <i class="fas fa-plus"></i>
          </div>
          <div class="faq-answer">
            <p>-हल्दी और सरसों के तेल को मिलाकर बनाया गया मिश्रण दाग वाली जगह लगाने से दाग कम होने लगता है। इसके लिए आप एक चम्मच हल्दी पाउडर लें। अब इसे दो चम्मच सरसों के तेल में मिलाए। अब इस पेस्ट को सफेद चकतों वाली जगह पर लगाएं और 15 मिनट तक रखने के बाद उस जगह को गुनगुने पानी से धो लें। ऐसा दिन में तीन से चार बार करें। इससे आराम मिलेगा।.
              <br>
              नीम की ताजी कोपल का पेस्ट बनाकर उसे छलनी में डालकर उसका रस निकाल लें। एक बड़ी चम्मच नीम के रस में एक चम्मच शहद मिलाकर दिन में तीन बार सेवन करें। इस मिश्रण का सेवन आप उम्रभर भी कर सकते हैं। इसके अलावा दो चम्मच अखरोट पाउडर में थोड़ा-सा पानी मिलाकर इसका पेस्ट बना लें। इस पेस्ट को दाग वाली जगह पर 20 मिनट तक लगाकर रखें। ऐसा दिन में तीन से चार बार करें।
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="image">
      <img src="<?php echo $upload_url;?>./images/background.jpg" class="imagesection" alt="" srcset="" height="500px" width="700px">
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
