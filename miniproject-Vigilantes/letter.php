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
<h1> LETTER WRITING</h1>
</center>
<p> 
 A letter is a written message that can be handwritten or printed on paper. It is usually sent to the recipient via mail or post in an envelope, although this is not a requirement as such. Any such message that is transferred via post is a letter, a written conversation between two parties.
Now that E-mails (Advantages and disadvantages) and texts and other such forms have become the norm for communication, the art of letter writing has taken a backseat. However, even today a lot of our communication, especially the formal kind, is done via letters. Whether it is a cover letter for a job, or the bank sending you a reminder or a college acceptance letter, letters are still an important mode of communication. Which is why it is important that we know the intricacies of letter writing?
</p>

<h2> Types of Letters </h2>
<p>
	Let us first understand that there are broadly two types of letter, namely Formal Letters, and Informal Letters. But then there are also a few types of letters based on their contents, formalities, the purpose of letter writing etc. Let us have a look at the few types of letters.
<p>
<h3>1)Formal Letter: </h3>
<p>
	These letters follow a certain pattern and formality. They are strictly kept professional in nature, and directly address the issues concerned. Any type of business letter or letter to authorities falls within this given category.
</p>
<h3> 2)Informal Letter: </h3>
<p>
	These are personal letters. They need not follow any set pattern or adhere to any formalities. They contain personal information or are a written conversation. Informal letters are generally written to friends, acquaintances, relatives etc
</p>
<h3> 3)Business Letter: </h3>
<p>
	This letter is written among business correspondents, generally contains commercial information such as quotations, orders, complaints, claims, letters for collections etc. Such letters are always strictly formal and follow a structure and pattern of formalities.
</p>
<h3> 4)Official Letter: </h3>
<p>
	This type of letter is written to inform offices, branches, subordinates of official information. It usually relays official information like rules, regulations, procedures, events, or any other such information. Official letters are also formal in nature and follow certain structure and decorum.
</p>
<h3>5)Social Letter: </h3>
<p>
	A personal letter written on the occasion of a special event is known as a social letter. Congratulatory letter, condolence letter, invitation letter etc are all social letters.
</p>
<h3>6) Circular Letter: </h3> 
<p>
	A letter that announces information to a large number of people is a circular letter. The same letter is circulated to a large group of people to correspond some important information like a change of address, change in management, the retirement of a partner etc.
</p>
<h3> 7)Employment Letters: </h3>
<p>
	Any letters with respect to the employment process, like joining letter, promotion letter, application letter etc.
</p>



<h2> Rules for Writing Letters  </h2>
<p>
In English there are a number of conventions that should be used when writing a formal or business letter. Furthermore, you try to write as simply and as clearly as possible, and not to make the letter longer than necessary. Remember not to use informal language like contractions.
</p>
<h3> Addresses: </h3>
<p> 
<div>
1) Your Address
The return address should be written in the top right-hand corner of the letter.
</div>
2) The Address of the person you are writing to
The inside address should be written on the left, starting below your address.
</p>
<h3> Date: </h3>
<p>
Different people put the date on different sides of the page. You can write this on the right or the left on the line after the address you are writing to. Write the month as a word.
</p>
<h3>Salutation or greeting:</h3>
<p>
<div>
1) Dear Sir or Madam,
If you do not know the name of the person you are writing to, use this. It is always advisable to try to find out a name.
</div>
2) Dear Mr Jenkins,
If you know the name, use the title (Mr, Mrs, Miss or Ms, Dr, etc.) and the surname only. If you are writing to a woman and do not know if she uses Mrs or Miss, you can use Ms, which is for married and single women.

</p>
<h3> Ending a letter: </h3>
<p>
<div>
1) Yours Faithfully :If you do not know the name of the person, end the letter this way.
</div>
<div>
2) Yours Sincerely :If you know the name of the person, end the letter this way.
</div>
3) Your signature:Sign your name, then print it underneath the signature. If you think the person you are writing to might not know whether you are male of female, put you title in brackets after your name.
</p>

<?php
        include 'footer.php';
        ?>
</body>
</html>
