<?php require "/home/mike/Projects/php/functions.php"; ?>
<title>Sunday Study Group</title>
<link rel="shortcut icon" href="http://localhost/Icons/peace.ico">

<!Don't refresh>
<!meta HTTP-EQUIV="Refresh" CONTENT="60">
<!Will this fill up the log?>
<meta HTTP-EQUIV="Refresh" CONTENT="60">

<hr>
<center>
<h2>Sunday Group Home Page on Vector</h2>
<?php
print(DateStr()." (Pacific Time)<br>\n");
print("Remote Address: ".$_SERVER[REMOTE_ADDR]." / ");
print("User: ".$_SERVER[PHP_AUTH_USER]."<br>\n");
print("<p>\n");
Trace("[SG]   IP: ".$_SERVER[REMOTE_ADDR]." / "."User: ".$_SERVER[PHP_AUTH_USER]);
?>
</center>
<hr>

<h3>Primary References</h3>
<ol>
    <li><b><a href="Notes.pdf">Notes.pdf</a></b>
    <p>
    <li><b><a href="Calendar.html">Calendar</a></b>
    <p>
    <li><p><b><a href="25-May-2014.pdf">May 25 Assignment</a></b>
</ol>


<h3>Misc. Files</h3>
<ol>
    <li><b><a href="Math_Concepts.pdf">Math_Concepts.pdf</a></b>
    <p>
    This is a short summary of the concepts (mostly from linear algebra)
    that are needed in order to begin the study of quantum information.

    <li><b><a href="Python-Windows.html">Python-Windows.html</a></b>
    <p>
    My attempt to describe one way of installing a python environment
    on the Microsoft windows OS.
    <p>
    <li> <b><a href="Sage.html">Using SageMathCloud to run Notebooks</a></b>
    <p>
    <li> <b><a href="Wakari.html">Using Wakari to run Notebooks</a></b>
    <p>
    <li><b><a href="Vector_Space_Axioms.pdf">Vector_Space_Axioms.pdf</a></b>
    <p>
    A linear algebra would probably discuss the concept of a "vector space"
    based on a set of axioms such as these. If we get far enough, we'll
    probably want to cover these.
    <p>
    <li> <b><a href="Week7.pdf">Week 7 Review Problems</a></b>
    <p>
    <li> <b><a href="Week9.pdf">Week 9 Homework</a></b>
</ol>

<h3>IPython Notebooks</h3>
<font color=black>
You can't just click on these to download them.
<br>
<!---
In Firebox, I think you should be able to
right click on the name and select "Save Link As ..." 
--->
<br>
If somebody knows how to do it in other browsers, let met know.
<br>
<b>Don't forget that you also need the current version of sglib.py!</b>
</font>
<ul>
<p>
<li> <b>
    <a href="http://nbviewer.ipython.org/url/Electron_Spin.ipynb">
        Electron_Spin.ipynb</a> / 
    <a href="Electron_Spin.ipynb">
        Download</a>
    </b>
    <br>Tutorial on electron spin in arbitrary directions.
<p>
<li> <b><a href="Matrix_Operators.ipynb">
    Matrix_Operators.ipynb</a></b>
    - Examples of matrices as "operators."
    <br>This goes with section 2.6 of the notes.
<p>
<li> <b><a href="Problem_Generator.ipynb">Problem_Generator.ipynb</a></b>
    - Produces "random problems."
<p>
<li> <b><a href="Utility_Functions.ipynb">Utility_Functions.ipynb</a></b>
    <br>Explanation and examples of some of the functions in
        <code>sglib.py</code>
    <br>We'll be using these to do various calculations.
<p>
<li> <b><a href="Week7_Review.ipynb">Week7_Review.ipynb</a></b>
    - Answers to the Week 7 Review problems.
    <br>This also provides an example of how to do some of the
        calculations we're interested in, in the python language.
<p>
<li> <b><a href="sglib.py">sglib.py</a></b> -
        Our python "library." Used by problem generator notebooks, etc.
</ul>

<hr>
<pre>

</pre>

