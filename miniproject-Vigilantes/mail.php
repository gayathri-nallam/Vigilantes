<?php
include 'common.php';
// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email_id'])) {
  header('location:index.php');
}
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link href="courses.css" rel="stylesheet" type="text/css"/> </head>
    <body>
        <?php include 'head.php' ;?>
<center>
<h1> EMAIL WRITING  </h1>
</center>
<p> 
	An email is a method of creating, transmitting, collection and receiving information over the electronic communication system.Here we will discuss, how to write a formal and informal email.The way for formal email has been explained in detail here
</p>

<h2> What is Email? </h2>
<p>
Email stands for Electronic mail.it is the most preferred means of communication because it is cheaper and faster.it is used in formal, semi-formal as well as an informal way of expression or writing. There are two ways to write the email…
<div> 1) Formally </div>
	  2) Informally
</p>
<h2>Format of Email writing:</h2>
<p>
The email writing format is likewise for each of the Categories. Though the selection of words and language varies depending upon the kind of email. One can employ friendly and casual writing in informal emails. The language utilized in formal emails should be professional, precise and format.

The important steps for writing the email are:
<div>1)	Subject line  </div>
<div>2)	Salutation		</div>
<div>3)Body of the mail </div>
<div>4)	Signature		 </div>

</p>
<h2> 7 Rules for Emails Writing </h2>
<p>
	Yes, emails are more informal than business letters. But there are still rules for a professional email.
Especially in the English-speaking business and professional world.
Email etiquette can change from one culture to another and from one language to another. Today you will learn exactly what you need for a professional email in English

</p>
<h3> 1. Always use a subject line </h3>
<p>
	The subject line is the first thing your reader will see. You want your subject line to be succinct (clear and brief).  This is your chance to catch your reader’s attention. It also helps the reader to immediately know what your email is about.
Without a clear subject line, your reader may not be interested in your email. And it is possible she will not read it.
Examples of clear subject lines:
<div>1)	Meeting date changed 	</div>
<div>2)	Question about the conference	</div>
<div>3)	Can you meet on Monday?			</div>
<div>4)	Suggestion for your presentation	</div>

</p>
<h3> 2. Use a professional greeting </h3>
<p>
Always, always, always start with a greeting. If you start without a greeting, your reader will notice immediately.
An email without a greeting, or with a greeting that is too informal, appears rude and too familiar.
Good examples of professional greetings:
<div>1)	Hello [first name],	</div>
<div>2)	Good morning / Good afternoon [first name],	</div>
<div>3)	Dear [first name],	</div>
<div>4)	Hi [first name] = with someone you know well	</div>


</p>
<h3>3. K.I.S.S (keep it short and simple)</h3>
<p>
That’s right! If you are not sure what to write in your email, remember this rule: KISS (Keep It Short and Simple)!
<div>1)	Avoid long, complicated sentences.	</div>
<div>2)	Don’t write several long paragraphs.	</div>
<div>3)	Use bullet points for important details or lists.	</div>

This will help your reader identify the important information immediately.
Most people are busy and they read emails quickly. Keep your sentences clear, your grammar simple and paragraphs short.
The KISS rule will also help you avoid potential grammar and vocabulary mistakes.

</p>
<h3> 4. Use a professional closing </h3> 
<p>
Like a greeting, you should always include a closing to be friendly, polite and professional. Without a closing, the end of the email feels abrupt and rude.
Example professional closings include:
<div>1)	I look forward to hearing from you. 	</div>
<div>2)	Best wishes,	</div>
<div>3)	Sincerely,	</div>
<div>4)	Thank you for your time,	</div>
<div>5)	Warmly,	</div>


<h3> 5. Be careful with ALL CAPITAL letters, abbreviations, and emojis.</h3>
<p>
USING ALL CAPITAL LETTERS feels like you are screaming, which feels rude. It also looks unprofessional.
Abbreviations are common in texts, Twitter and Facebook, but they are not appropriate for business or professional emails. If you would not use abbreviations on your resume or business letter, then you don’t want to use them in a professional email.
For example, do not write “LOL” for laughing out loud or “IMHO” for in my humble opinion or “gr8” for great.
Again, emojis are common with friends and family on social media, but they are not appropriate for business or professional correspondence (letters and emails).

</p>
<h3>6. Proofread your email </h3>
<p> Be sure to always proofread your email before sending. In professional emails, grammar, spelling, and punctuation do matter!
Here are some issues to check for and correct if there are errors:
<div>1)	All lowercase or all capital letters </div>
<div>2)	Use correct capitalization for sentences and proper nouns </div>
<div>3)	Check for your use of articles, prepositions, and verb tenses </div>
<div>4)	Check spelling
Some helpful ways to proofread are:</div>
<div>a)	Read your email out loud</div>
<div>b)	Have a friend or colleague review your email if you are not sure</div>
<div>c)	You can always use a dictionary to help you</div>
 </p>


<h3>7. Always include your contact information at the end of your email </h3> 
<p>
For a professional email, your email signature should include your full name and email address.
If appropriate, it is also a good idea to include your phone number and company website.
</p>



<h2>Format sample:</h2>
<p>
<div> From: Sender’s Mail.id </div> 
<div> To: Recipient’s Mail.id	</div> 
<div> Cc: Other concerned person’s with visible email ids	</div> 
<div> Bcc: Other concerned person’s with invisible email ids	</div> 
<div> Subject: Reason for writing the mail	</div> 
<div> Greeting/Salutation: Display your respect (such as Sir/Madam, Respected Sir/Madam)	</div> 
<div> Main body: Content of the email	</div> 
<div> a)Introduction	</div> 
<div> b)Discuss the matter in detail	</div> 
<div> c)Conclusion	</div> 
<div> Closing line: Thank you for the consideration </div> 
<div> Attachments: Attach reference files	</div> 
<div> Signature line: Name and Contact Details	</div> 

</p>
<?php
        include 'footer.php';
        ?>
</body>
</html>