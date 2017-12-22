<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('include/head.php') ?>
</head>

<body id="page-top" data-spy="scroll" data-target="#sidebar-wrapper">


  <!-- OPERATORS -->
  <section class="container">

    <h1>JavaScript - Operators</h1>
    <h2>What is an operator?</h2> 
    <p>Let us take a simple expression <b>4 + 5 is equal to 9</b>. Here 4 and 5 are called <b>operands</b> and ‘+’ is called the <b>operator</b>. JavaScript supports the following types of operators.</p>
    <ul class="list">
    <li><p>Arithmetic Operators</p></li>
    <li><p>Comparision Operators</p></li>
    <li><p>Logical (or Relational) Operators</p></li>
    <li><p>Assignment Operators</p></li>
    <li><p>Conditional (or ternary) Operators</p></li>
    </ul>
    <p>Lets have a look on all operators one by one.</p>
    <h2>Arithmetic Operators</h2>
    <p>JavaScript supports the following arithmetic operators &minus;</p>
    <p>Assume variable A holds 10 and variable B holds 20, then &minus;</p>
    <table class="table table-bordered">
    <tr>
    <th style="width:9%;">Sr.No</th>
    <th>Operator and Description</th>
    </tr>
    <tr>
    <td>1</td>
    <td><p><b>+ (Addition)</b></p>
    <p>Adds two operands</p>
    <p><b>Ex:</b> A + B will give 30</p>
    </td>
    </tr>
    <tr>
    <td>2</td>
    <td><p><b>- (Subtraction)</b></p>
    <p>Subtracts the second operand from the first</p>
    <p><b>Ex:</b> A - B will give -10</p>
    </td>
    </tr>
    <tr>
    <td>3</td>
    <td><p><b>* (Multiplication)</b></p>
    <p>Multiply both operands</p>
    <p><b>Ex:</b> A * B will give 200</p>
    </td>
    </tr>
    <tr>
    <td>4</td>
    <td><p><b>/ (Division)</b></p>
    <p>Divide the numerator by the denominator</p>
    <p><b>Ex:</b> B / A will give 2</p>
    </td>
    </tr>
    <tr>
    <td>5</td>
    <td><p><b>% (Modulus)</b></p>
    <p>Outputs the remainder of an integer division</p>
    <p><b>Ex:</b> B % A will give 0</p>
    </td>
    </tr>
    <tr>
    <td>6</td>
    <td><p><b>++ (Increment)</b></p>
    <p>Increases an integer value by one</p>
    <p><b>Ex:</b> A++ will give 11</p>
    </td>
    </tr>
    <tr>
    <td>7</td>
    <td><p><b>-- (Decrement)</b></p>
    <p>Decreases an integer value by one</p>
    <p><b>Ex:</b> A-- will give 9</p>
    </td>
    </tr>
    </table>
    <p><b>Note</b> &minus; Addition operator (+) works for Numeric as well as Strings. e.g. "a" + 10 will give "a10".</p>
    <h3>Example</h3>
    <p>The following code shows how to use arithmetic operators in JavaScript.</p>
    <pre class="prettyprint notranslate tryit">
    &lt;html&gt;
    &lt;body&gt;

    &lt;script type="text/javascript"&gt;
       &lt;!--
          var a = 33;
          var b = 10;
          var c = "Test";
          var linebreak = "&lt;br /&gt;";
       
          document.write("a + b = ");
          result = a + b;
          document.write(result);
          document.write(linebreak);
       
          document.write("a - b = ");
          result = a - b;
          document.write(result);
          document.write(linebreak);
       
          document.write("a / b = ");
          result = a / b;
          document.write(result);
          document.write(linebreak);
       
          document.write("a % b = ");
          result = a % b;
          document.write(result);
          document.write(linebreak);
       
          document.write("a + b + c = ");
          result = a + b + c;
          document.write(result);
          document.write(linebreak);
       
          a = a++;
          document.write("a++ = ");
          result = a++;
          document.write(result);
          document.write(linebreak);
       
          b = b--;
          document.write("b-- = ");
          result = b--;
          document.write(result);
          document.write(linebreak);
       //--&gt;
    &lt;/script&gt;

    Set the variables to different values and then try...
    &lt;/body&gt;
    &lt;/html&gt;
    </pre>
    <h3>Output</h3>
    <pre class="result notranslate">
    a + b = 43 
    a - b = 23 
    a / b = 3.3 
    a % b = 3 
    a + b + c = 43Test 
    a++ = 33 
    b-- = 10
    Set the variables to different values and then try...
    </pre>
    <h2>Comparison Operators</h2>
    <p>JavaScript supports the following comparison operators &minus;</p>
    <p>Assume variable A holds 10 and variable B holds 20, then &minus;</p>
    <table class="table table-bordered">
    <tr>
    <th>Sr.No</th>
    <th>Operator and Description</th>
    </tr>
    <tr>
    <td>1</td>
    <td>
    <p>= = <b>(Equal)</b></p>
    <p>Checks if the value of two operands are equal or not, if yes, then the condition becomes true.</p>
    <p><b>Ex:</b> (A == B) is not true.</p>
    </td>
    </tr>
    <tr>
    <td>2</td>
    <td>
    <p><b>!= (Not Equal)</b></p>
    <p>Checks if the value of two operands are equal or not, if the values are not equal, then the condition becomes true.</p>
    <p><b>Ex:</b> (A != B) is true.</p>
    </td>
    </tr>
    <tr>
    <td>3</td>
    <td>
    <p><b>&gt; (Greater than)</b></p>
    <p>Checks if the value of the left operand is greater than the value of the right operand, if yes, then the condition becomes true.</p>
    <p><b>Ex:</b> (A &gt; B) is not true.</p>
    </td>
    </tr>
    <tr>
    <td>4</td>
    <td>
    <p><b>&lt; (Less than)</b></p>
    <p>Checks if the value of the left operand is less than the value of the right operand, if yes, then the condition becomes true.</p>
    <p><b>Ex:</b> (A &lt; B) is true.</p>
    </td>
    </tr>
    <tr>
    <td>5</td>
    <td>
    <p><b>&gt;= (Greater than or Equal to)</b></p>
    <p>Checks if the value of the left operand is greater than or equal to the value of the right operand, if yes, then the condition becomes true.</p>
    <p><b>Ex:</b> (A &gt;= B) is not true.</p>
    </td>
    </tr>
    <tr>
    <td>6</td>
    <td>
    <p><b>&lt;= (Less than or Equal to)</b></p>
    <p>Checks if the value of the left operand is less than or equal to the value of the right operand, if yes, then the condition becomes true.</p>
    <p><b>Ex:</b> (A &lt;= B) is true.</p>
    </td>
    </tr>
    </table>
    <h3>Example</h3>
    <p>The following code shows how to use comparison operators in JavaScript.</p>
    <pre class="prettyprint notranslate tryit">
    &lt;html&gt;
    &lt;body&gt;

    &lt;script type="text/javascript"&gt;
       &lt;!--
          var a = 10;
          var b = 20;
          var linebreak = "&lt;br /&gt;";

          document.write("(a == b) =&gt; ");
          result = (a == b);
          document.write(result);
          document.write(linebreak);
       
          document.write("(a &lt; b) =&gt; ");
          result = (a &lt; b);
          document.write(result);
          document.write(linebreak);
       
          document.write("(a &gt; b) =&gt; ");
          result = (a &gt; b);
          document.write(result);
          document.write(linebreak);
       
          document.write("(a != b) =&gt; ");
          result = (a != b);
          document.write(result);
          document.write(linebreak);
       
          document.write("(a &gt;= b) =&gt; ");
          result = (a &gt;= b);
          document.write(result);
          document.write(linebreak);
       
          document.write("(a &lt;= b) =&gt; ");
          result = (a &lt;= b);
          document.write(result);
          document.write(linebreak);
       //--&gt;
    &lt;/script&gt;

    Set the variables to different values and different operators and then try...
    &lt;/body&gt;
    &lt;/html&gt;
    </pre>
    <h3>Output</h3>
    <pre class="result notranslate">
    (a == b) =&gt; false 
    (a &lt; b) =&gt; true 
    (a &gt; b) =&gt; false 
    (a != b) =&gt; true 
    (a &gt;= b) =&gt; false 
    a &lt;= b) =&gt; true
    Set the variables to different values and different operators and then try...
    </pre>
    <h2>Logical Operators</h2>
    <p>JavaScript supports the following logical operators &minus;</p>
    <p>Assume variable A holds 10 and variable B holds 20, then &minus;</p>
    <table class="table table-bordered">
    <tr>
    <th>Sr.No</th>
    <th>Operator and Description</th>
    </tr>
    <tr>
    <td>1</td>
    <td><p><b>&amp;&amp; (Logical AND)</b></p>
    <p>If both the operands are non-zero, then the condition becomes true.</p>
    <p><b>Ex:</b> (A && B) is true.</p>
    </td>
    </tr>
    <tr>
    <td>2</td>
    <td><p><b>|| (Logical OR)</b></p>
    <p>If any of the two operands are non-zero, then the condition becomes true.</p>
    <p><b>Ex:</b> (A || B) is true.</p>
    </td>
    </tr>
    <tr>
    <td>3</td>
    <td><p><b>! (Logical NOT)</b></p>
    <p>Reverses the logical state of its operand. If a condition is true, then the Logical NOT operator will make it false.</p>
    <p><b>Ex:</b> ! (A && B) is false.</p>
    </td>
    </tr>
    </table>
    <h3>Example</h3>
    <p>Try the following code to learn how to implement Logical Operators in JavaScript.</p>
    <pre class="prettyprint notranslate tryit">
    &lt;html&gt;
    &lt;body&gt;

    &lt;script type="text/javascript"&gt;
       &lt;!--
          var a = true;
          var b = false;
          var linebreak = "&lt;br /&gt;";

          document.write("(a &amp;&amp; b) =&gt; ");
          result = (a &amp;&amp; b);
          document.write(result);
          document.write(linebreak);
       
          document.write("(a || b) =&gt; ");
          result = (a || b);
          document.write(result);
          document.write(linebreak);
       
          document.write("!(a &amp;&amp; b) =&gt; ");
          result = (!(a &amp;&amp; b));
          document.write(result);
          document.write(linebreak);
       //--&gt;
    &lt;/script&gt;

    &lt;p&gt;Set the variables to different values and different operators and then try...&lt;/p&gt;
    &lt;/body&gt;
    &lt;/html&gt;
    </pre>
    <h3>Output</h3>
    <pre class="result notranslate">
    (a &amp;&amp; b) =&gt; false 
    (a || b) =&gt; true 
    !(a &amp;&amp; b) =&gt; true
    Set the variables to different values and different operators and then try...
    </pre>
    <h2>Bitwise Operators</h2>
    <p>JavaScript supports the following bitwise operators &minus;</p>
    <p>Assume variable A holds 2 and variable B holds 3, then &minus;</p>
    <table class="table table-bordered">
    <tr>
    <th>Sr.No</th>
    <th>Operator and Description</th>
    </tr>
    <tr>
    <td>1</td>
    <td><p><b>&amp; (Bitwise AND)</b></p>
    <p>It performs a Boolean AND operation on each bit of its integer arguments.</p>
    <p><b>Ex:</b> (A & B) is 2.</p>
    </td>
    </tr>
    <tr>
    <td>2</td>
    <td><p><b>| (BitWise OR)</b></p>
    <p>It performs a Boolean OR operation on each bit of its integer arguments.</p>
    <p><b>Ex:</b> (A | B) is 3.</p>
    </td>
    </tr>
    <tr>
    <td>3</td>
    <td><p><b>^ (Bitwise XOR)</b></p>
    <p>It performs a Boolean exclusive OR operation on each bit of its integer arguments. Exclusive OR means that either operand one is true or operand two is true, but not both.</p>
    <p><b>Ex:</b> (A ^ B) is 1.</p>
    </td>
    </tr>
    <tr>
    <td>4</td>
    <td><p><b>~ (Bitwise Not)</b></p>
    <p>It is a unary operator and operates by reversing all the bits in the operand.</p>
    <p><b>Ex:</b> (~B) is -4.</p>
    </td>
    </tr>
    <tr>
    <td>5</td>
    <td><p><b>&lt;&lt; (Left Shift)</b></p>
    <p>It moves all the bits in its first operand to the left by the number of places specified in the second operand. New bits are filled with zeros. Shifting a value left by one position is equivalent to multiplying it by 2, shifting two positions is equivalent to multiplying by 4, and so on.</p>
    <p><b>Ex:</b> (A &lt;&lt; 1) is 4.</p>
    </td>
    </tr>
    <tr>
    <td>6</td>
    <td><p><b>&gt;&gt; (Right Shift)</b></p>
    <p>Binary Right Shift Operator. The left operand’s value is moved right by the number of bits specified by the right operand.</p>
    <p><b>Ex:</b> (A &gt;&gt; 1) is 1.</p>
    </td>
    </tr>
    <tr>
    <td>7</td>
    <td><p><b>&gt;&gt;&gt; (Right shift with Zero)</b></p>
    <p>This operator is just like the &gt;&gt; operator, except that the bits shifted in on the left are always zero.</p>
    <p><b>Ex:</b> (A &gt;&gt;&gt; 1) is 1.</p>
    </td>
    </tr>
    </table>
    <h3>Example</h3>
    <p>Try the following code to implement Bitwise operator in JavaScript.</p>
    <pre class="prettyprint notranslate tryit">
    &lt;html&gt;
    &lt;body&gt;

    &lt;script type="text/javascript"&gt;
       &lt;!--
          var a = 2; // Bit presentation 10
          var b = 3; // Bit presentation 11
          var linebreak = "&lt;br /&gt;";
       
          document.write("(a & b) =&gt; ");
          result = (a &amp; b);
          document.write(result);
          document.write(linebreak);
       
          document.write("(a | b) =&gt; ");
          result = (a | b);
          document.write(result);
          document.write(linebreak);
       
          document.write("(a ^ b) =&gt; ");
          result = (a ^ b);
          document.write(result);
          document.write(linebreak);
       
          document.write("(~b) =&gt; ");
          result = (~b);
          document.write(result);
          document.write(linebreak);
       
          document.write("(a &lt;&lt; b) =&gt; ");
          result = (a &lt;&lt; b);
          document.write(result);
          document.write(linebreak);
       
          document.write("(a &gt;&gt; b) =&gt; ");
          result = (a &gt;&gt; b);
          document.write(result);
          document.write(linebreak);
       //--&gt;
    &lt;/script&gt;

    &lt;p&gt;Set the variables to different values and different operators and then try...&lt;/p&gt;
    &lt;/body&gt;
    &lt;/html&gt;
    </pre>
    <pre class="result notranslate">
    (a &amp; b) =&gt; 2 
    (a | b) =&gt; 3 
    (a ^ b) =&gt; 1 
    (~b) =&gt; -4 
    (a &lt;&lt; b) =&gt; 16 
    (a &gt;&gt; b) =&gt; 0
    Set the variables to different values and different operators and then try...
    </pre>
    <h2>Assignment Operators</h2>
    <p>JavaScript supports the following assignment operators &minus;</p>
    <table class="table table-bordered">
    <tr>
    <th>Sr.No</th>
    <th>Operator and Description</th>
    </tr>
    <tr>
    <td>1</td>
    <td><p><b>= (Simple Assignment )</b></p>
    <p>Assigns values from the right side operand to the left side operand</p>
    <p><b>Ex:</b> C = A + B will assign the value of A + B into C</p>
    </td>
    </tr>
    <tr>
    <td>2</td>
    <td><p><b>+= (Add and Assignment)</b></p>
    <p>It adds the right operand to the left operand and assigns the result to the left operand.</p>
    <p><b>Ex:</b> C += A is equivalent to C = C + A</p>
    </td>
    </tr>
    <tr>
    <td>3</td>
    <td><p><b>&minus;= (Subtract and Assignment)</b></p>
    <p>It subtracts the right operand from the left operand and assigns the result to the left operand.</p>
    <p><b>Ex:</b> C -= A is equivalent to C = C - A</p>
    </td>
    </tr>
    <tr>
    <td>4</td>
    <td><p><b>*= (Multiply and Assignment)</b></p>
    <p>It multiplies the right operand with the left operand and assigns the result to the left operand.</p>
    <p><b>Ex:</b> C *= A is equivalent to C = C * A</p>
    </td>
    </tr>
    <tr>
    <td>5</td>
    <td><p><b>/= (Divide and Assignment)</b></p>
    <p>It divides the left operand with the right operand and assigns the result to the left operand.</p>
    <p><b>Ex:</b> C /= A is equivalent to C = C / A</p>
    </td>
    </tr>
    <tr>
    <td>6</td>
    <td><p><b>%= (Modules and Assignment)</b></p>
    <p>It takes modulus using two operands and assigns the result to the left operand.</p>
    <p><b>Ex:</b> C %= A is equivalent to C = C % A</p>
    </td>
    </tr>
    </table>
    <p><b>Note</b> &minus; Same logic applies to Bitwise operators so they will become like &lt;&lt;=, &gt;&gt;=, &gt;&gt;=, &amp;=, |= and ^=.</p>
    <h3>Example</h3>
    <p>Try the following code to implement assignment operator in JavaScript.</p>
    <pre class="prettyprint notranslate tryit">
    &lt;html&gt;
    &lt;body&gt;

    &lt;script type="text/javascript"&gt;
       &lt;!--
          var a = 33;
          var b = 10;
          var linebreak = "&lt;br /&gt;";
       
          document.write("Value of a =&gt; (a = b) =&gt; ");
          result = (a = b);
          document.write(result);
          document.write(linebreak);
       
          document.write("Value of a =&gt; (a += b) =&gt; ");
          result = (a += b);
          document.write(result);
          document.write(linebreak);
       
          document.write("Value of a =&gt; (a -= b) =&gt; ");
          result = (a -= b);
          document.write(result);
          document.write(linebreak);
       
          document.write("Value of a =&gt; (a *= b) =&gt; ");
          result = (a *= b);
          document.write(result);
          document.write(linebreak);
       
          document.write("Value of a =&gt; (a /= b) =&gt; ");
          result = (a /= b);
          document.write(result);
          document.write(linebreak);
       
          document.write("Value of a =&gt; (a %= b) =&gt; ");
          result = (a %= b);
          document.write(result);
          document.write(linebreak);
       //--&gt;
    &lt;/script&gt;

    &lt;p&gt;Set the variables to different values and different operators and then try...&lt;/p&gt;
    &lt;/body&gt;
    &lt;/html&gt;
    </pre>
    <h3>Output</h3>
    <pre class="result notranslate">
    Value of a =&gt; (a = b) =&gt; 10
    Value of a =&gt; (a += b) =&gt; 20 
    Value of a =&gt; (a -= b) =&gt; 10 
    Value of a =&gt; (a *= b) =&gt; 100 
    Value of a =&gt; (a /= b) =&gt; 10
    Value of a =&gt; (a %= b) =&gt; 0
    Set the variables to different values and different operators and then try...
    </pre>
    <h2>Miscellaneous Operator</h2>
    <p>We will discuss two operators here that are quite useful in JavaScript: the <b>conditional operator</b> (? :) and the <b>typeof operator</b>.</p>
    <h3>Conditional Operator (? :)</h3>
    <p>The conditional operator first evaluates an expression for a true or false value and then executes one of the two given statements depending upon the result of the evaluation.</p>
    <table class="table table-bordered">
    <tr>
    <th width="10%">Sr.No</th>
    <th>Operator and Description</th>
    </tr>
    <tr>
    <td>1</td>
    <td><p><b>? : (Conditional )</b></p>
    <p>If Condition is true? Then value X : Otherwise value Y</p>
    </td>
    </tr>
    </table>
    <h3>Example</h3>
    <p>Try the following code to understand how the Conditional Operator works in JavaScript.</p>
    <pre class="prettyprint notranslate tryit">
    &lt;html&gt;
    &lt;body&gt;

    &lt;script type="text/javascript"&gt;
       &lt;!--
          var a = 10;
          var b = 20;
          var linebreak = "&lt;br /&gt;";
       
          document.write ("((a &gt; b) ? 100 : 200) =&gt; ");
          result = (a &gt; b) ? 100 : 200;
          document.write(result);
          document.write(linebreak);
       
          document.write ("((a &lt; b) ? 100 : 200) =&gt; ");
          result = (a &lt; b) ? 100 : 200;
          document.write(result);
          document.write(linebreak);
       //--&gt;
    &lt;/script&gt;

    &lt;p&gt;Set the variables to different values and different operators and then try...&lt;/p&gt;
    &lt;/body&gt;
    &lt;/html&gt;
    </pre>
    <h3>Output</h3>
    <pre class="result notranslate">
    ((a &gt; b) ? 100 : 200) =&gt; 200 
    ((a &lt; b) ? 100 : 200) =&gt; 100
    Set the variables to different values and different operators and then try...
    </pre>
    <h2>typeof Operator</h2>
    <p>The <b>typeof</b> operator is a unary operator that is placed before its single operand, which can be of any type. Its value is a string indicating the data type of the operand.</p>
    <p>The <i>typeof</i> operator evaluates to "number", "string", or "boolean" if its operand is a number, string, or boolean value and returns true or false based on the evaluation.</p>
    <p>Here is a list of the return values for the <b>typeof</b> Operator.</p>
    <table class="table table-bordered">
    <tr>
    <th width="20%">Type</th>
    <th>String Returned by typeof</th>
    </tr>
    <tr>
    <td>Number</td>
    <td>"number"</td>
    </tr>
    <tr>
    <td>String</td>
    <td>"string"</td>
    </tr>
    <tr>
    <td>Boolean</td>
    <td>"boolean"</td>
    </tr>
    <tr>
    <td>Object</td>
    <td>"object"</td>
    </tr>
    <tr>
    <td>Function</td>
    <td>"function"</td>
    </tr>
    <tr>
    <td>Undefined</td>
    <td>"undefined"</td>
    </tr>
    <tr>
    <td>Null</td>
    <td>"object"</td>
    </tr>
    </table>
    <h3>Example</h3>
    <p>The following code shows how to implement <b>typeof</b> operator.</p>
    <pre class="prettyprint notranslate tryit">
    &lt;html&gt;
    &lt;body&gt;

    &lt;script type="text/javascript"&gt;
       &lt;!--
          var a = 10;
          var b = "String";
          var linebreak = "&lt;br /&gt;";
       
          result = (typeof b == "string" ? "B is String" : "B is Numeric");
          document.write("Result =&gt; ");
          document.write(result);
          document.write(linebreak);
       
          result = (typeof a == "string" ? "A is String" : "A is Numeric");
          document.write("Result =&gt; ");
          document.write(result);
          document.write(linebreak);
       //--&gt;
    &lt;/script&gt;

    &lt;p&gt;Set the variables to different values and different operators and then try...&lt;/p&gt;
    &lt;/body&gt;
    &lt;/html&gt;
    </pre>
    <h3>Output</h3>
    <pre class="result notranslate">
    Result =&gt; B is String 
    Result =&gt; A is Numeric
    Set the variables to different values and different operators and then try...
    </pre>
    
  </section>




    <!-- STATEMENTS -->
  <section class="container">

    <h1>JavaScript - if...else Statement</h1>
      <p>While writing a program, there may be a situation when you need to adopt one out of a given set of paths. In such cases, you need to use conditional statements that allow your program to make correct decisions and perform right actions.</p>
      <p>JavaScript supports conditional statements which are used to perform different actions based on different conditions. Here we will explain the <b>if..else</b> statement.</p>
      <h2>Flow Chart of if-else</h2>
      <p>The following flow chart shows how the if-else statement works.</p>
      <img src="https://www.tutorialspoint.com/javascript/images/decision_making.jpg" alt="Decision Making"/>
      <p>JavaScript supports the following forms of <b>if..else</b> statement &minus;</p>
      <ul class="list">
      <li><p>if statement</p></li>
      <li><p>if...else statement</p> </li>
      <li><p>if...else if... statement.</p></li>
      </ul>
      <h2>if statement</h2>
      <p>The <b>if</b> statement is the fundamental control statement that allows JavaScript to make decisions and execute statements conditionally.</p>
      <h3>Syntax</h3>
      <p>The syntax for a basic if statement is as follows &minus;</p>
      <pre class="prettyprint notranslate">
      if (expression){
         Statement(s) to be executed if expression is true
      }
      </pre>
      <p>Here a JavaScript expression is evaluated. If the resulting value is true, the given statement(s) are executed. If the expression is false, then no statement would be not executed. Most of the times, you will use comparison operators while making decisions.</p>
      <h3>Example</h3>
      <p>Try the following example to understand how the <b>if</b> statement works.</p>
      <pre class="prettyprint notranslate tryit">
      &lt;html&gt;
         &lt;body&gt;
            
            &lt;script type="text/javascript"&gt;
               &lt;!--
                  var age = 20;
               
                  if( age &gt; 18 ){
                     document.write("&lt;b&gt;Qualifies for driving&lt;/b&gt;");
                  }
               //--&gt;
            &lt;/script&gt;
            
            &lt;p&gt;Set the variable to different value and then try...&lt;/p&gt;
         &lt;/body&gt;
      &lt;/html&gt;
      </pre>
      <h3>Output</h3>
      <pre class="result notranslate">
      Qualifies for driving
      Set the variable to different value and then try...
      </pre>
      <h2>if...else statement:</h2>
      <p>The <b>'if...else'</b> statement is the next form of control statement that allows JavaScript to execute statements in a more controlled way.</p>
      <h3>Syntax</h3>
      <pre class="prettyprint notranslate">
      if (expression){
         Statement(s) to be executed if expression is true
      }

      else{
         Statement(s) to be executed if expression is false
      }
      </pre>
      <p>Here JavaScript expression is evaluated. If the resulting value is true, the given statement(s) in the ‘if’ block, are executed. If the expression is false, then the given statement(s) in the else block are executed.</p>
      <h3>Example</h3>
      <p>Try the following code to learn how to implement an if-else statement in JavaScript.</p>
      <pre class="prettyprint notranslate tryit">
      &lt;html&gt;
         &lt;body&gt;
         
            &lt;script type="text/javascript"&gt;
               &lt;!--
                  var age = 15;
               
                  if( age &gt; 18 ){
                     document.write("&lt;b&gt;Qualifies for driving&lt;/b&gt;");
                  }
                  
                  else{
                     document.write("&lt;b&gt;Does not qualify for driving&lt;/b&gt;");
                  }
               //--&gt;
            &lt;/script&gt;
            
            &lt;p&gt;Set the variable to different value and then try...&lt;/p&gt;
         &lt;/body&gt;
      &lt;/html&gt;
      </pre>
      <h3>Output</h3>
      <pre class="result notranslate">
      Does not qualify for driving
      Set the variable to different value and then try...
      </pre>
      <h2>if...else if... statement</h2>
      <p>The <b>if...else if...</b> statement is an advanced form of <b>if…else</b> that allows JavaScript to make a correct decision out of several conditions.</p>
      <h3>Syntax</h3>
      <p>The syntax of an if-else-if statement is as follows &minus;</p>
      <pre class="prettyprint notranslate">
      if (expression 1){
         Statement(s) to be executed if expression 1 is true
      }

      else if (expression 2){
         Statement(s) to be executed if expression 2 is true
      }

      else if (expression 3){
         Statement(s) to be executed if expression 3 is true
      }

      else{
         Statement(s) to be executed if no expression is true
      }
      </pre>
      <p>There is nothing special about this code. It is just a series of <b>if</b> statements, where each <b>if</b> is a part of the <b>else</b> clause of the previous statement. Statement(s) are executed based on the true condition, if none of the conditions is true, then the <b>else</b> block is executed.</p>
      <h3>Example</h3>
      <p>Try the following code to learn how to implement an if-else-if statement in JavaScript.</p>
      <pre class="prettyprint notranslate tryit">
      &lt;html&gt;
         &lt;body&gt;
         
            &lt;script type="text/javascript"&gt;
               &lt;!--
                  var book = "maths";
                  if( book == "history" ){
                     document.write("&lt;b&gt;History Book&lt;/b&gt;");
                  }
               
                  else if( book == "maths" ){
                     document.write("&lt;b&gt;Maths Book&lt;/b&gt;");
                  }
               
                  else if( book == "economics" ){
                     document.write("&lt;b&gt;Economics Book&lt;/b&gt;");
                  }
               
                  else{
                     document.write("&lt;b&gt;Unknown Book&lt;/b&gt;");
                  }
               //--&gt;
            &lt;/script&gt;
            
            &lt;p&gt;Set the variable to different value and then try...&lt;/p&gt;
         &lt;/body&gt;
      &lt;html&gt;
      </pre>
      <h3>Output</h3>
      <pre class="result notranslate">
      <b>Maths Book</b>
      Set the variable to different value and then try...
      </pre>
      <h1>JavaScript - Switch Case</h1>
      <p>You can use multiple <b>if...else…if</b> statements, as in the previous chapter, to perform a multiway branch. However, this is not always the best solution, especially when all of the branches depend on the value of a single variable.</p>
      <p>Starting with JavaScript 1.2, you can use a <b>switch</b> statement which handles exactly this situation, and it does so more efficiently than repeated <b>if...else if</b> statements.</p>
      <h2>Flow Chart</h2>
      <p>The following flow chart explains a switch-case statement works.</p>
      <img src="https://www.tutorialspoint.com/javascript/images/switch_case.jpg" alt=""/>
      <h3>Syntax</h3>
      <p>The objective of a <b>switch</b> statement is to give an expression to evaluate and several different statements to execute based on the value of the expression. The interpreter checks each <b>case</b> against the value of the expression until a match is found. If nothing matches, a <b>default</b> condition will be used.</p>
      <pre class="prettyprint notranslate">
      switch (expression)
      {
         case condition 1: statement(s)
         break;
         
         case condition 2: statement(s)
         break;
         ...
         
         case condition n: statement(s)
         break;
         
         default: statement(s)
      }
      </pre>
      <p>The <b>break</b> statements indicate the end of a particular case. If they were omitted, the interpreter would continue executing each statement in each of the following cases.</p>
      <p>We will explain <b>break</b> statement in <i>Loop Control</i> chapter.</p>
      <h3>Example</h3>
      <p>Try the following example to implement switch-case statement.</p>
      <pre class="prettyprint notranslate tryit">
      &lt;html&gt;
         &lt;body&gt;
         
            &lt;script type="text/javascript"&gt;
               &lt;!--
                  var grade='A';
                  document.write("Entering switch block&lt;br /&gt;");
                  switch (grade)
                  {
                     case 'A': document.write("Good job&lt;br /&gt;");
                     break;
                  
                     case 'B': document.write("Pretty good&lt;br /&gt;");
                     break;
                  
                     case 'C': document.write("Passed&lt;br /&gt;");
                     break;
                  
                     case 'D': document.write("Not so good&lt;br /&gt;");
                     break;
                  
                     case 'F': document.write("Failed&lt;br /&gt;");
                     break;
                  
                     default:  document.write("Unknown grade&lt;br /&gt;")
                  }
                  document.write("Exiting switch block");
               //--&gt;
            &lt;/script&gt;
            
            &lt;p&gt;Set the variable to different value and then try...&lt;/p&gt;
         &lt;/body&gt;
      &lt;/html&gt;
      </pre>
      <h3>Output</h3>
      <pre class="result notranslate">
      Entering switch block
      Good job
      Exiting switch block
      Set the variable to different value and then try...
      </pre>
      <p>Break statements play a major role in switch-case statements. Try the following code that uses switch-case statement without any break statement.</p>
      <pre class="prettyprint notranslate tryit">
      &lt;html&gt;
         &lt;body&gt;
            
            &lt;script type="text/javascript"&gt;
               &lt;!--
                  var grade='A';
                  document.write("Entering switch block&lt;br /&gt;");
                  switch (grade)
                  {
                     case 'A': document.write("Good job&lt;br /&gt;");
                     case 'B': document.write("Pretty good&lt;br /&gt;");
                     case 'C': document.write("Passed&lt;br /&gt;");
                     case 'D': document.write("Not so good&lt;br /&gt;");
                     case 'F': document.write("Failed&lt;br /&gt;");
                     default: document.write("Unknown grade&lt;br /&gt;")
                  }
                  document.write("Exiting switch block");
               //--&gt;
            &lt;/script&gt;
            
            &lt;p&gt;Set the variable to different value and then try...&lt;/p&gt;
         &lt;/body&gt;
      &lt;/html&gt;
      </pre>
      <h3>Output</h3>
      <pre class="result notranslate">
      Entering switch block
      Good job
      Pretty good
      Passed
      Not so good
      Failed
      Unknown grade
      Exiting switch block
      Set the variable to different value and then try...
      </pre>
      <h1>JavaScript - While Loops</h1>
      <p>While writing a program, you may encounter a situation where you need to perform an action over and over again. In such situations, you would need to write loop statements to reduce the number of lines.</p>
      <p>JavaScript supports all the necessary loops to ease down the pressure of programming.</p>
      <h2>The while Loop</h2>
      <p>The most basic loop in JavaScript is the <b>while</b> loop which would be discussed in this chapter. The purpose of a <b>while</b> loop is to execute a statement or code block repeatedly as long as an <b>expression</b> is true. Once the expression becomes <b>false,</b> the loop terminates.</p>
      <h3>Flow Chart</h3>
      <p>The flow chart of <b>while loop</b> looks as follows &minus;</p>
      <img src="https://www.tutorialspoint.com/javascript/images/while_loop.jpg" alt="While loop"/>
      <h3>Syntax</h3>
      <p>The syntax of <b>while loop</b> in JavaScript is as follows &minus;</p>
      <pre class="prettyprint notranslate">
      while (expression){
         Statement(s) to be executed if expression is true
      }
      </pre>
      <h3>Example</h3>
      <p>Try the following example to implement while loop.</p>
      <pre class="prettyprint notranslate tryit">
      &lt;html&gt;
         &lt;body&gt;
            
            &lt;script type="text/javascript"&gt;
               &lt;!--
                  var count = 0;
                  document.write("Starting Loop ");
               
                  while (count &lt; 10){
                     document.write("Current Count : " + count + "&lt;br /&gt;");
                     count++;
                  }
               
                  document.write("Loop stopped!");
               //--&gt;
            &lt;/script&gt;
            
            &lt;p&gt;Set the variable to different value and then try...&lt;/p&gt;
         &lt;/body&gt;
      &lt;/html&gt;
      </pre>
      <h3>Output</h3>
      <pre class="result notranslate">
      Starting Loop
      Current Count : 0
      Current Count : 1
      Current Count : 2
      Current Count : 3
      Current Count : 4
      Current Count : 5
      Current Count : 6
      Current Count : 7
      Current Count : 8
      Current Count : 9
      Loop stopped!
      Set the variable to different value and then try... 
      </pre>
      <h2>The do...while Loop</h2>
      <p>The <b>do...while</b> loop is similar to the <b>while</b> loop except that the condition check happens at the end of the loop. This means that the loop will always be executed at least once, even if the condition is <b>false</b>.</p>
      <h3>Flow Chart</h3>
      <p>The flow chart of a <b>do-while</b> loop would be as follows &minus;</p>
      <img src="https://www.tutorialspoint.com/javascript/images/do_while_loop.jpg" alt="Do While Loop"/>
      <h3>Syntax</h3>
      <p>The syntax for <b>do-while</b> loop in JavaScript is as follows &minus;</p>
      <pre class="prettyprint notranslate">
      do{
         Statement(s) to be executed;
      } while (expression);
      </pre>
      <p><b>Note</b> &minus; Don’t miss the semicolon used at the end of the do...while loop.</p>
      <h3>Example</h3>
      <p>Try the following example to learn how to implement a <b>do-while</b> loop in JavaScript.</p>
      <pre class="prettyprint notranslate">
      &lt;html&gt;
         &lt;body&gt;
         
            &lt;script type="text/javascript"&gt;
               &lt;!--
                  var count = 0;
                  
                  document.write("Starting Loop" + "&lt;br /&gt;");
                  do{
                     document.write("Current Count : " + count + "&lt;br /&gt;");
                     count++;
                  }
                  
                  while (count &lt; 5);
                  document.write ("Loop stopped!");
               //--&gt;
            &lt;/script&gt;
            
            &lt;p&gt;Set the variable to different value and then try...&lt;/p&gt;
         &lt;/body&gt;
      &lt;/html&gt;
      </pre>
      <h3>Output</h3>
      <pre class="result notranslate">
      Starting Loop
      Current Count : 0 
      Current Count : 1 
      Current Count : 2 
      Current Count : 3 
      Current Count : 4
      Loop Stopped!
      Set the variable to different value and then try...
      </pre>
      <h1>JavaScript - For Loop</h1>
      <p>The '<b>for</b>' loop is the most compact form of looping. It includes the following three important parts &minus;</p>
      <ul class="list">
      <li><p>The <b>loop initialization</b> where we initialize our counter to a starting value. The initialization statement is executed before the loop begins.</p></li> 
      <li><p>The <b>test statement</b> which will test if a given condition is true or not. If the condition is true, then the code given inside the loop will be executed, otherwise the control will come out of the loop.</p></li>
      <li><p>The <b>iteration statement</b> where you can increase or decrease your counter.</p></li>
      </ul>
      <p>You can put all the three parts in a single line separated by semicolons.</p>
      <h3>Flow Chart</h3>
      <p>The flow chart of a for loop in JavaScript would be as follows &minus;</p>
      <img src="https://www.tutorialspoint.com/javascript/images/for_loop.jpg" alt="For Loop"/>
      <h3>Syntax</h3>
      <p>The syntax of for loop is JavaScript is as follows &minus;</p>
      <pre class="prettyprint notranslate">
      for (initialization; test condition; iteration statement){
         Statement(s) to be executed if test condition is true
      }
      </pre>
      <h3>Example</h3>
      <p>Try the following example to learn how a for loop works in JavaScript.</p>
      <pre class="prettyprint notranslate tryit">
      &lt;html&gt;
         &lt;body&gt;
            
            &lt;script type="text/javascript"&gt;
               &lt;!--
                  var count;
                  document.write("Starting Loop" + "&lt;br /&gt;");
               
                  for(count = 0; count &lt; 10; count++){
                     document.write("Current Count : " + count );
                     document.write("&lt;br /&gt;");
                  }
               
                  document.write("Loop stopped!");
               //--&gt;
            &lt;/script&gt;
            
            &lt;p&gt;Set the variable to different value and then try...&lt;/p&gt;
         &lt;/body&gt;
      &lt;/html&gt;
      </pre>
      <h3>Output</h3>
      <pre class="result notranslate">
      Starting Loop
      Current Count : 0
      Current Count : 1
      Current Count : 2
      Current Count : 3
      Current Count : 4
      Current Count : 5
      Current Count : 6
      Current Count : 7
      Current Count : 8
      Current Count : 9
      Loop stopped! 
      Set the variable to different value and then try...
      </pre>
      <h1>JavaScript <i>for...in</i> loop</h1>
      <p>The <b>for...in</b> loop is used to loop through an object's properties. As we have not discussed Objects yet, you may not feel comfortable with this loop. But once you understand how objects behave in JavaScript, you will find this loop very useful.</p>
      <h3>Syntax</h3>
      <pre class="prettyprint notranslate">
      for (variablename in object){
         statement or block to execute
      }
      </pre>
      <p>In each iteration, one property from <b>object</b> is assigned to <b>variablename</b> and this loop continues till all the properties of the object are exhausted.</p>
      <h3>Example</h3>
      <p>Try the following example to implement ‘for-in’ loop. It prints the web browser’s <b>Navigator</b> object.</p>
      <pre class="prettyprint notranslate tryit">
      &lt;html&gt;
         &lt;body&gt;
            
            &lt;script type="text/javascript"&gt;
               &lt;!--
                  var aProperty;
                  document.write("Navigator Object Properties&lt;br /&gt; ");
               
                  for (aProperty in navigator) {
                     document.write(aProperty);
                     document.write("&lt;br /&gt;");
                  }
                  document.write ("Exiting from the loop!");
               //--&gt;
            &lt;/script&gt;
            
            &lt;p&gt;Set the variable to different object and then try...&lt;/p&gt;
         &lt;/body&gt;
      &lt;/html&gt;
      </pre>
      <h3>Output</h3>
      <pre class="result notranslate">
      Navigator Object Properties 
      serviceWorker 
      webkitPersistentStorage 
      webkitTemporaryStorage 
      geolocation 
      doNotTrack 
      onLine 
      languages 
      language 
      userAgent 
      product 
      platform 
      appVersion 
      appName 
      appCodeName 
      hardwareConcurrency 
      maxTouchPoints 
      vendorSub 
      vendor 
      productSub 
      cookieEnabled 
      mimeTypes 
      plugins 
      javaEnabled 
      getStorageUpdates 
      getGamepads 
      webkitGetUserMedia 
      vibrate 
      getBattery 
      sendBeacon 
      registerProtocolHandler 
      unregisterProtocolHandler 
      Exiting from the loop!
      Set the variable to different object and then try...
      </pre>
      <h1>JavaScript - Loop Control</h1>
      <p>JavaScript provides full control to handle loops and switch statements. There may be a situation when you need to come out of a loop without reaching its bottom. There may also be a situation when you want to skip a part of your code block and start the next iteration of the loop.</p>
      <p>To handle all such situations, JavaScript provides <b>break</b> and <b>continue</b> statements. These statements are used to immediately come out of any loop or to start the next iteration of any loop respectively.</p>
      <h2>The break Statement</h2>
      <p>The <b>break</b> statement, which was briefly introduced with the <i>switch</i> statement, is used to exit a loop early, breaking out of the enclosing curly braces.</p>
      <h3>Flow Chart</h3>
      <p>The flow chart of a break statement would look as follows &minus;</p>
      <img src="https://www.tutorialspoint.com/javascript/images/break_statement.jpg" alt="Break Statement"/>
      <h3>Example</h3>
      <p>The following example illustrates the use of a <b>break</b> statement with a while loop. Notice how the loop breaks out early once <b>x</b> reaches 5 and reaches to <b>document.write (..)</b> statement just below to the closing curly brace &minus;</p>
      <pre class="prettyprint notranslate tryit">
      &lt;html&gt;
         &lt;body&gt;
            
            &lt;script type="text/javascript"&gt;
               &lt;!--
               var x = 1;
               document.write("Entering the loop&lt;br /&gt; ");
               
               while (x &lt; 20)
               {
                  if (x == 5){
                     break; // breaks out of loop completely
                  }
                  x = x + 1;
                  document.write( x + "&lt;br /&gt;");
               }
               
               document.write("Exiting the loop!&lt;br /&gt; ");
               //--&gt;
            &lt;/script&gt;
            
            &lt;p&gt;Set the variable to different value and then try...&lt;/p&gt;
         &lt;/body&gt;
      &lt;/html&gt;
      </pre>
      <h3>Output</h3>
      <pre class="result notranslate">
      Entering the loop
      2
      3
      4
      5
      Exiting the loop!
      Set the variable to different value and then try...
      </pre>
      <p>We already have seen the usage of <b>break</b> statement inside <b>a switch</b> statement.</p>
      <h2>The continue Statement</h2>
      <p>The <b>continue</b> statement tells the interpreter to immediately start the next iteration of the loop and skip the remaining code block. When a <b>continue</b> statement is encountered, the program flow moves to the loop check expression immediately and if the condition remains true, then it starts the next iteration, otherwise the control comes out of the loop.</p>
      <h3>Example</h3>
      <p>This example illustrates the use of a <b>continue</b> statement with a while loop. Notice how the <b>continue</b> statement is used to skip printing when the index held in variable <b>x</b> reaches 5 &minus;</p>
      <pre class="prettyprint notranslate tryit">
      &lt;html&gt;
         &lt;body&gt;
            
            &lt;script type="text/javascript"&gt;
               &lt;!--
                  var x = 1;
                  document.write("Entering the loop&lt;br /&gt; ");
               
                  while (x &lt; 10)
                  {
                     x = x + 1;
                     
                     if (x == 5){
                        continue; // skip rest of the loop body
                     }
                     document.write( x + "&lt;br /&gt;");
                  }
               
                  document.write("Exiting the loop!&lt;br /&gt; ");
               //--&gt;
            &lt;/script&gt;
            
            &lt;p&gt;Set the variable to different value and then try...&lt;/p&gt;
         &lt;/body&gt;
      &lt;/html&gt;
      </pre>
      <h3>Output</h3>
      <pre class="result notranslate">
      Entering the loop
      2
      3
      4
      6
      7
      8
      9
      10
      Exiting the loop!
      </pre>
      <h2>Using Labels to Control the Flow</h2>
      <p>Starting from JavaScript 1.2, a label can be used with <b>break</b> and <b>continue</b> to control the flow more precisely. A <b>label</b> is simply an identifier followed by a colon (:) that is applied to a statement or a block of code. We will see two different examples to understand how to use labels with break and continue.</p>
      <p><b>Note</b> &minus; Line breaks are not allowed between the <b>‘continue’</b> or <b>‘break’</b> statement and its label name. Also, there should not be any other statement in between a label name and associated loop.</p>
      <p>Try the following two examples for a better understanding of Labels.</p>
      <h3>Example 1</h3>
      <p>The following example shows how to implement Label with a break statement.</p>
      <pre class="prettyprint notranslate tryit">
      &lt;html&gt;
         &lt;body&gt;
            
            &lt;script type="text/javascript"&gt;
               &lt;!--
                  document.write("Entering the loop!&lt;br /&gt; ");
                  outerloop: // This is the label name
               
                  for (var i = 0; i &lt; 5; i++)
                  {
                     document.write("Outerloop: " + i + "&lt;br /&gt;");
                     innerloop:
                     for (var j = 0; j &lt; 5; j++)
                     {
                        if (j &gt; 3 ) break ; // Quit the innermost loop
                        if (i == 2) break innerloop; // Do the same thing
                        if (i == 4) break outerloop; // Quit the outer loop
                        document.write("Innerloop: " + j + " &lt;br /&gt;");
                     }
                  }
               
                  document.write("Exiting the loop!&lt;br /&gt; ");
               //--&gt;
            &lt;/script&gt;
            
         &lt;/body&gt;
      &lt;/html&gt;
      </pre>
      <h3>Output</h3>
      <pre class="result notranslate">
      Entering the loop!
      Outerloop: 0
      Innerloop: 0 
      Innerloop: 1 
      Innerloop: 2 
      Innerloop: 3 
      Outerloop: 1
      Innerloop: 0 
      Innerloop: 1 
      Innerloop: 2 
      Innerloop: 3 
      Outerloop: 2
      Outerloop: 3
      Innerloop: 0 
      Innerloop: 1 
      Innerloop: 2 
      Innerloop: 3 
      Outerloop: 4
      Exiting the loop!
      </pre>
      <h3>Example 2</h3>
      <pre class="prettyprint notranslate">
      &lt;html&gt;
         &lt;body&gt;
         
            &lt;script type="text/javascript"&gt;
               &lt;!--
               document.write("Entering the loop!&lt;br /&gt; ");
               outerloop: // This is the label name
               
               for (var i = 0; i &lt; 3; i++)
               {
                  document.write("Outerloop: " + i + "&lt;br /&gt;");
                  for (var j = 0; j &lt; 5; j++)
                  {
                     if (j == 3){
                        continue outerloop;
                     }
                     document.write("Innerloop: " + j + "&lt;br /&gt;");
                  }
               }
               
               document.write("Exiting the loop!&lt;br /&gt; ");
               //--&gt;
            &lt;/script&gt;
            
         &lt;/body&gt;
      &lt;/html&gt;
      </pre>
      <h3>Output</h3>
      <pre class="result notranslate">
      Entering the loop!
      Outerloop: 0
      Innerloop: 0
      Innerloop: 1
      Innerloop: 2
      Outerloop: 1
      Innerloop: 0
      Innerloop: 1
      Innerloop: 2
      Outerloop: 2
      Innerloop: 0
      Innerloop: 1
      Innerloop: 2
      Exiting the loop!
      </pre>
  
  </section>




  
<h1>JavaScript - Functions</h1>
<p>A function is a group of reusable code which can be called anywhere in your program. This eliminates the need of writing the same code again and again. It helps programmers in writing modular codes. Functions allow a programmer to divide a big program into a number of small and manageable functions.</p>
<p>Like any other advanced programming language, JavaScript also supports all the features necessary to write modular code using functions. You must have seen functions like <b>alert()</b> and <b>write()</b> in the earlier chapters. We were using these functions again and again, but they had been written in core JavaScript only once.</p>
<p>JavaScript allows us to write our own functions as well. This section explains how to write your own functions in JavaScript.</p>
<h2>Function Definition</h2>
<p>Before we use a function, we need to define it. The most common way to define a function in JavaScript is by using the <b>function</b> keyword, followed by a unique function name, a list of parameters (that might be empty), and a statement block surrounded by curly braces.</p>
<h3>Syntax</h3>
<p>The basic syntax is shown here.</p>
<pre class="prettyprint notranslate">
&lt;script type="text/javascript"&gt;
   &lt;!--
      function functionname(parameter-list)
      {
         statements
      }
   //--&gt;
&lt;/script&gt;
</pre>
<h3>Example</h3>
<p>Try the following example. It defines a function called sayHello that takes no parameters &minus;</p>
<pre class="prettyprint notranslate">
&lt;script type="text/javascript"&gt;
   &lt;!--
      function sayHello()
      {
         alert("Hello there");
      }
   //--&gt;
&lt;/script&gt;
</pre>
<h2>Calling a Function</h2>
<p>To invoke a function somewhere later in the script, you would simply need to write the name of that function as shown in the following code.</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   &lt;head&gt;
   
      &lt;script type="text/javascript"&gt;
         function sayHello()
         {
            document.write ("Hello there!");
         }
      &lt;/script&gt;
      
   &lt;/head&gt;
   &lt;body&gt;
      &lt;p&gt;Click the following button to call the function&lt;/p&gt;
      
      &lt;form&gt;
         &lt;input type="button" onclick="sayHello()" value="Say Hello"&gt;
      &lt;/form&gt;
      
      &lt;p&gt;Use different text in write method and then try...&lt;/p&gt;
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/calling_function.htm" height="120px" width="600px"></iframe>
<h2>Function Parameters</h2>
<p>Till now, we have seen functions without parameters. But there is a facility to pass different parameters while calling a function. These passed parameters can be captured inside the function and any manipulation can be done over those parameters. A function can take multiple parameters separated by comma.</p>
<h3>Example</h3>
<p>Try the following example. We have modified our <b>sayHello</b> function here. Now it takes two parameters.</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   &lt;head&gt;
   
      &lt;script type="text/javascript"&gt;
         function sayHello(name, age)
         {
            document.write (name + " is " + age + " years old.");
         }
      &lt;/script&gt;
      
   &lt;/head&gt;
   &lt;body&gt;
      &lt;p&gt;Click the following button to call the function&lt;/p&gt;
      
      &lt;form&gt;
         &lt;input type="button" onclick="sayHello('Zara', 7)" value="Say Hello"&gt;
      &lt;/form&gt;
      
      &lt;p&gt;Use different parameters inside the function and then try...&lt;/p&gt;
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/function_parameter.htm" height="120px" width="600px"></iframe>
<h2>The return Statement</h2>
<p>A JavaScript function can have an optional <b>return</b> statement. This is required if you want to return a value from a function. This statement should be the last statement in a function.</p>
<p>For example, you can pass two numbers in a function and then you can expect the function to return their multiplication in your calling program.</p>
<h3>Example</h3>
<p>Try the following example. It defines a function that takes two parameters and concatenates them before returning the resultant in the calling program.</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   &lt;head&gt;
      
      &lt;script type="text/javascript"&gt;
         function concatenate(first, last)
         {
            var full;
            full = first + last;
            return full;
         }
         
         function secondFunction()
         {
            var result;
            result = concatenate('Zara', 'Ali');
            document.write (result );
         }
      &lt;/script&gt;
      
   &lt;/head&gt;
   
   &lt;body&gt;
      &lt;p&gt;Click the following button to call the function&lt;/p&gt;
      
      &lt;form&gt;
         &lt;input type="button" onclick="secondFunction()" value="Call Function"&gt;
      &lt;form&gt;
      
      &lt;p&gt;Use different parameters inside the function and then try...&lt;/p&gt;
  
  &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/return_statement.htm" height="120px" width="600px"></iframe>
<p>There is a lot to learn about JavaScript functions, however we have covered the most important concepts in this tutorial.</p>
<ul class="list">
<li><p><a href="/javascript/javascript_nested_functions.htm" title="JavaScript Nested Functions">JavaScript Nested Functions</a></p></li>
<li><p><a href="/javascript/javascript_function_constructors.htm" title="JavaScript Function Constructors">JavaScript  Function( ) Constructor</a></p></li>
<li><p><a href="/javascript/javascript_function_literals.htm" title="JavaScript Function Literals">JavaScript Function Literals</a></p></li>
</ul>
<h1>JavaScript - Events</h1>
<h2>What is an Event ?</h2>
<p>JavaScript's interaction with HTML is handled through events that occur when the user or the browser manipulates a page.</p>
<p>When the page loads, it is called an event. When the user clicks a button, that click too is an event. Other examples include events like pressing any key, closing a window, resizing a window, etc.</p>
<p>Developers can use these events to execute JavaScript coded responses, which cause buttons to close windows, messages to be displayed to users, data to be validated, and virtually any other type of response imaginable.</p>
<p>Events are a part of the Document Object Model (DOM) Level 3 and every HTML element contains a set of events which can trigger JavaScript Code.</p>
<p>Please go through this small tutorial for a better understanding <a href="/html/html_events_ref.htm">HTML Event Reference</a>. Here we will see a few examples to understand a relation between Event and JavaScript &minus;</p>
<h2>onclick Event Type</h2>
<p>This is the most frequently used event type which occurs when a user clicks the left button of his mouse. You can put your validation, warning etc., against this event type.</p>
<h3>Example</h3>
<p>Try the following example.</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   &lt;head&gt;
      
      &lt;script type="text/javascript"&gt;
         &lt;!--
            function sayHello() {
               alert("Hello World")
            }
         //--&gt;
      &lt;/script&gt;
      
   &lt;/head&gt;
   
   &lt;body&gt;
      &lt;p&gt;Click the following button and see result&lt;/p&gt;
      
      &lt;form&gt;
         &lt;input type="button" onclick="sayHello()" value="Say Hello" /&gt;
      &lt;/form&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/onclick_event.htm" height="90px" width="600px"></iframe>
<h2>onsubmit Event type</h2>
<p><b>onsubmit</b> is an event that occurs when you try to submit a form. You can put your form validation against this event type.</p>
<h3>Example</h3>
<p>The following example shows how to use onsubmit. Here we are calling a <b>validate()</b> function before submitting a form data to the webserver. If <b>validate()</b> function returns true, the form will be submitted, otherwise it will not submit the data.</p>
<p>Try the following example.</p>
<pre class="prettyprint notranslate">
&lt;html&gt;
   &lt;head&gt;
   
      &lt;script type="text/javascript"&gt;
         &lt;!--
            function validation() {
               all validation goes here
               .........
               return either true or false
            }
         //--&gt;
      &lt;/script&gt;
      
   &lt;/head&gt;
   &lt;body&gt;
   
      &lt;form method="POST" action="t.cgi" onsubmit="return validate()"&gt;
         .......
         &lt;input type="submit" value="Submit" /&gt;
      &lt;/form&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h2>onmouseover and onmouseout</h2>
<p>These two event types will help you create nice effects with images or even with text as well. The <b>onmouseover</b> event triggers when you bring your mouse over any element and the <b>onmouseout</b> triggers when you move your mouse out from that element. Try the following example.</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   &lt;head&gt;
   
      &lt;script type="text/javascript"&gt;
         &lt;!--
            function over() {
               document.write ("Mouse Over");
            }
            
            function out() {
               document.write ("Mouse Out");
            }
            
         //--&gt;
      &lt;/script&gt;
      
   &lt;/head&gt;
   &lt;body&gt;
      &lt;p&gt;Bring your mouse inside the division to see the result:&lt;/p&gt;
      
      &lt;div onmouseover="over()" onmouseout="out()"&gt;
         &lt;h2&gt; This is inside the division &lt;/h2&gt;
      &lt;/div&gt;
         
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/onmouseover_evnet.htm" height="120px" width="600px"></iframe>
<h2>HTML 5 Standard Events</h2>
<p>The standard HTML 5 events are listed here for your reference. Here script indicates a Javascript function to be executed against that event.</p>
<table class="table table-bordered">
<tr>
<th>Attribute</th>
<th>Value</th>
<th>Description</th>
</tr>
<tr>
<td>Offline</td>
<td>script</td>
<td>Triggers when the document goes offline</td>
</tr>
<tr>
<td>Onabort</td>
<td>script</td>
<td>Triggers on an abort event</td>
</tr>
<tr>
<td>onafterprint</td>
<td>script</td>
<td>Triggers after the document is printed</td>
</tr>
<tr>
<td>onbeforeonload</td>
<td>script</td>
<td>Triggers before the document loads</td>
</tr>
<tr>
<td>onbeforeprint</td>
<td>script</td>
<td>Triggers before the document is printed</td>
</tr>
<tr>
<td>onblur</td>
<td>script</td>
<td>Triggers when the window loses focus</td>
</tr>
<tr>
<td>oncanplay</td>
<td>script</td>
<td>Triggers when media can start play, but might has to stop for buffering</td>
</tr>
<tr>
<td>oncanplaythrough</td>
<td>script</td>
<td>Triggers when media can be played to the end, without stopping for buffering</td>
</tr>
<tr>
<td>onchange</td>
<td>script</td>
<td>Triggers when an element changes</td>
</tr>
<tr>
<td>onclick</td>
<td>script</td>
<td>Triggers on a mouse click</td>
</tr>
<tr>
<td>oncontextmenu</td>
<td>script</td>
<td>Triggers when a context menu is triggered</td>
</tr>
<tr>
<td>ondblclick</td>
<td>script</td>
<td>Triggers on a mouse double-click</td>
</tr>
<tr>
<td>ondrag</td>
<td>script</td>
<td>Triggers when an element is dragged</td>
</tr>
<tr>
<td>ondragend</td>
<td>script</td>
<td>Triggers at the end of a drag operation</td>
</tr>
<tr>
<td>ondragenter</td>
<td>script</td>
<td>Triggers when an element has been dragged to a valid drop target</td>
</tr>
<tr>
<td>ondragleave</td>
<td>script</td>
<td>Triggers when an element is being dragged over a valid drop target</td>
</tr>
<tr>
<td>ondragover</td>
<td>script</td>
<td>Triggers at the start of a drag operation</td>
</tr>
<tr>
<td>ondragstart</td>
<td>script</td>
<td>Triggers at the start of a drag operation</td>
</tr>
<tr>
<td>ondrop</td>
<td>script</td>
<td>Triggers when dragged element is being dropped</td>
</tr>
<tr>
<td>ondurationchange</td>
<td>script</td>
<td>Triggers when the length of the media is changed</td>
</tr>
<tr>
<td>onemptied</td>
<td>script</td>
<td>Triggers when a media resource element suddenly becomes empty.</td>
</tr>
<tr>
<td>onended</td>
<td>script</td>
<td>Triggers when media has reach the end</td>
</tr>
<tr>
<td>onerror</td>
<td>script</td>
<td>Triggers when an error occur</td>
</tr>
<tr>
<td>onfocus</td>
<td>script</td>
<td>Triggers when the window gets focus</td>
</tr>
<tr>
<td>onformchange</td>
<td>script</td>
<td>Triggers when a form changes</td>
</tr>
<tr>
<td>onforminput</td>
<td>script</td>
<td>Triggers when a form gets user input</td>
</tr>
<tr>
<td>onhaschange</td>
<td>script</td>
<td>Triggers when the document has change</td>
</tr>
<tr>
<td>oninput</td>
<td>script</td>
<td>Triggers when an element gets user input</td>
</tr>
<tr>
<td>oninvalid</td>
<td>script</td>
<td>Triggers when an element is invalid</td>
</tr>
<tr>
<td>onkeydown</td>
<td>script</td>
<td>Triggers when a key is pressed</td>
</tr>
<tr>
<td>onkeypress</td>
<td>script</td>
<td>Triggers when a key is pressed and released</td>
</tr>
<tr>
<td>onkeyup</td>
<td>script</td>
<td>Triggers when a key is released</td>
</tr>
<tr>
<td>onload</td>
<td>script</td>
<td>Triggers when the document loads</td>
</tr>
<tr>
<td>onloadeddata</td>
<td>script</td>
<td>Triggers when media data is loaded</td>
</tr>
<tr>
<td>onloadedmetadata</td>
<td>script</td>
<td>Triggers when the duration and other media data of a media element is loaded</td>
</tr>
<tr>
<td>onloadstart</td>
<td>script</td>
<td>Triggers when the browser starts to load the media data</td>
</tr>
<tr>
<td>onmessage</td>
<td>script</td>
<td>Triggers when the message is triggered</td>
</tr>
<tr>
<td>onmousedown</td>
<td>script</td>
<td>Triggers when a mouse button is pressed</td>
</tr>
<tr>
<td>onmousemove</td>
<td>script</td>
<td>Triggers when the mouse pointer moves</td>
</tr>
<tr>
<td>onmouseout</td>
<td>script</td>
<td>Triggers when the mouse pointer moves out of an element</td>
</tr>
<tr>
<td>onmouseover</td>
<td>script</td>
<td>Triggers when the mouse pointer moves over an element</td>
</tr>
<tr>
<td>onmouseup</td>
<td>script</td>
<td>Triggers when a mouse button is released</td>
</tr>
<tr>
<td>onmousewheel</td>
<td>script</td>
<td>Triggers when the mouse wheel is being rotated</td>
</tr>
<tr>
<td>onoffline</td>
<td>script</td>
<td>Triggers when the document goes offline</td>
</tr>
<tr>
<td>onoine</td>
<td>script</td>
<td>Triggers when the document comes online</td>
</tr>
<tr>
<td>ononline</td>
<td>script</td>
<td>Triggers when the document comes online</td>
</tr>
<tr>
<td>onpagehide</td>
<td>script</td>
<td>Triggers when the window is hidden</td>
</tr>
<tr>
<td>onpageshow</td>
<td>script</td>
<td>Triggers when the window becomes visible</td>
</tr>
<tr>
<td>onpause</td>
<td>script</td>
<td>Triggers when media data is paused</td>
</tr>
<tr>
<td>onplay</td>
<td>script</td>
<td>Triggers when media data is going to start playing</td>
</tr>
<tr>
<td>onplaying</td>
<td>script</td>
<td>Triggers when media data has start playing</td>
</tr>
<tr>
<td>onpopstate</td>
<td>script</td>
<td>Triggers when the window's history changes</td>
</tr>
<tr>
<td>onprogress</td>
<td>script</td>
<td>Triggers when the browser is fetching the media data</td>
</tr>
<tr>
<td>onratechange</td>
<td>script</td>
<td>Triggers when the media data's playing rate has changed</td>
</tr>
<tr>
<td>onreadystatechange</td>
<td>script</td>
<td>Triggers when the ready-state changes</td>
</tr>
<tr>
<td>onredo</td>
<td>script</td>
<td>Triggers when the document performs a redo</td>
</tr>
<tr>
<td>onresize</td>
<td>script</td>
<td>Triggers when the window is resized</td>
</tr>
<tr>
<td>onscroll</td>
<td>script</td>
<td>Triggers when an element's scrollbar is being scrolled</td>
</tr>
<tr>
<td>onseeked</td>
<td>script</td>
<td>Triggers when a media element's seeking attribute is no longer true, and the seeking has ended</td>
</tr>
<tr>
<td>onseeking</td>
<td>script</td>
<td>Triggers when a media element's seeking attribute is true, and the seeking has begun</td>
</tr>
<tr>
<td>onselect</td>
<td>script</td>
<td>Triggers when an element is selected</td>
</tr>
<tr>
<td>onstalled</td>
<td>script</td>
<td>Triggers when there is an error in fetching media data</td>
</tr>
<tr>
<td>onstorage</td>
<td>script</td>
<td>Triggers when a document loads</td>
</tr>
<tr>
<td>onsubmit</td>
<td>script</td>
<td>Triggers when a form is submitted</td>
</tr>
<tr>
<td>onsuspend</td>
<td>script</td>
<td>Triggers when the browser has been fetching media data, but stopped before the entire media file was fetched</td>
</tr>
<tr>
<td>ontimeupdate</td>
<td>script</td>
<td>Triggers when media changes its playing position</td>
</tr>
<tr>
<td>onundo</td>
<td>script</td>
<td>Triggers when a document performs an undo</td>
</tr>
<tr>
<td>onunload</td>
<td>script</td>
<td>Triggers when the user leaves the document</td>
</tr>
<tr>
<td>onvolumechange</td>
<td>script</td>
<td>Triggers when media changes the volume, also when volume is set to "mute"</td>
</tr>
<tr>
<td>onwaiting</td>
<td>script</td>
<td>Triggers when media has stopped playing, but is expected to resume</td>
</tr>
</table>
<h1>JavaScript and Cookies</h1>
<h2>What are Cookies ?</h2>
<p>Web Browsers and Servers use HTTP protocol to communicate and HTTP is a stateless protocol. But for a commercial website, it is required to maintain session information among different pages. For example, one user registration ends after completing many pages. But how to maintain users' session information across all the web pages.</p>
<p>In many situations, using cookies is the most efficient method of remembering and tracking preferences, purchases, commissions, and other information required for better visitor experience or site statistics.</p>
<h2>How It Works ?</h2>
<p>Your server sends some data to the visitor's browser in the form of a cookie. The browser may accept the cookie. If it does, it is stored as a plain text record on the visitor's hard drive. Now, when the visitor arrives at another page on your site, the browser sends the same cookie to the server for retrieval. Once retrieved, your server knows/remembers what was stored earlier.</p>
<p>Cookies are a plain text data record of 5 variable-length fields &minus;</p>
<ul class="list">
<li><p><b>Expires</b> &minus; The date the cookie will expire. If this is blank, the cookie will expire when the visitor quits the browser.</p></li>
<li><p><b>Domain</b> &minus; The domain name of your site.</p></li>
<li><p><b>Path</b> &minus; The path to the directory or web page that set the cookie. This may be blank if you want to retrieve the cookie from any directory or page.</p></li>
<li><p><b>Secure</b> &minus; If this field contains the word "secure", then the cookie may only be retrieved with a secure server. If this field is blank, no such restriction exists.</p></li>
<li><p><b>Name=Value</b> &minus; Cookies are set and retrieved in the form of key-value pairs</p></li>
</ul>
<p>Cookies were originally designed for CGI programming. The data contained in a cookie is automatically transmitted between the web browser and the web server, so CGI scripts on the server can read and write cookie values that are stored on the client.</p>
<p>JavaScript can also manipulate cookies using the <b>cookie</b> property of the <b>Document</b> object. JavaScript can read, create, modify, and delete the cookies that apply to the current web page.</p>
<h2>Storing Cookies</h2>
<p>The simplest way to create a cookie is to assign a string value to the document.cookie object, which looks like this.</p>
<pre class="prettyprint notranslate">
document.cookie = "key1=value1;key2=value2;expires=date";
</pre>
<p>Here the <b>expires</b> attribute is optional. If you provide this attribute with a valid date or time, then the cookie will expire on a given date or time and thereafter, the cookies' value will not be accessible.</p>
<p><b>Note</b> &minus; Cookie values may not include semicolons, commas, or whitespace. For this reason, you may want to use the JavaScript <b>escape()</b> function to encode the value before storing it in the cookie. If you do this, you will also have to use the corresponding <b>unescape()</b> function when you read the cookie value.</p>
<h3>Example</h3>
<p>Try the following. It sets a customer name in an input cookie.</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   &lt;head&gt;
      
      &lt;script type="text/javascript"&gt;
         &lt;!--
            function WriteCookie()
            {
               if( document.myform.customer.value == "" ){
                  alert("Enter some value!");
                  return;
               }
               cookievalue= escape(document.myform.customer.value) + ";";
               document.cookie="name=" + cookievalue;
               document.write ("Setting Cookies : " + "name=" + cookievalue );
            }
         //--&gt;
      &lt;/script&gt;
      
   &lt;/head&gt;
   
   &lt;body&gt;
   
      &lt;form name="myform" action=""&gt;
         Enter name: &lt;input type="text" name="customer"/&gt;
         &lt;input type="button" value="Set Cookie" onclick="WriteCookie();"/&gt;
      &lt;/form&gt;
   
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/write_cookie.htm" height="70px" width="600px"></iframe>
<p>Now your machine has a cookie called <b>name</b>. You can set multiple cookies using multiple key=value pairs separated by comma.</p>
<h2>Reading Cookies</h2>
<p>Reading a cookie is just as simple as writing one, because the value of the document.cookie object is the cookie. So you can use this string whenever you want to access the cookie. The document.cookie string will keep a list of name=value pairs separated by semicolons, where <b>name</b> is the name of a cookie and value is its string value.</p>
<p>You can use strings' <b>split()</b> function to break a string into key and values as follows &minus;</p>
<h3>Example</h3>
<p>Try the following example to get all the cookies.</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   &lt;head&gt;
   
      &lt;script type="text/javascript"&gt;
         &lt;!--
            function ReadCookie()
            {
               var allcookies = document.cookie;
               document.write ("All Cookies : " + allcookies );
               
               // Get all the cookies pairs in an array
               cookiearray = allcookies.split(';');
               
               // Now take key value pair out of this array
               for(var i=0; i&lt;cookiearray.length; i++){
                  name = cookiearray[i].split('=')[0];
                  value = cookiearray[i].split('=')[1];
                  document.write ("Key is : " + name + " and Value is : " + value);
               }
            }
         //--&gt;
      &lt;/script&gt;
      
   &lt;/head&gt;
   &lt;body&gt;
      
      &lt;form name="myform" action=""&gt;
         &lt;p&gt; click the following button and see the result:&lt;/p&gt;
         &lt;input type="button" value="Get Cookie" onclick="ReadCookie()"/&gt;
      &lt;/form&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<p><b>Note</b> &minus; Here <b>length</b> is a method of <b>Array</b> class which returns the length of an array. We will discuss Arrays in a separate chapter. By that time, please try to digest it.</p>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/reading_cookies.htm" height="130px" width="600px"></iframe>
<p><b>Note</b> &minus; There may be some other cookies already set on your machine. The above code will display all the cookies set on your machine.</p>
<h2>Setting Cookies Expiry Date</h2>
<p>You can extend the life of a cookie beyond the current browser session by setting an expiration date and saving the expiry date within the cookie. This can be done by setting the <b>‘expires’</b> attribute to a date and time.</p>
<h3>Example</h3>
<p>Try the following example. It illustrates how to extend the expiry date of a cookie by 1 Month.</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   &lt;head&gt;
   
      &lt;script type="text/javascript"&gt;
         &lt;!--
            function WriteCookie()
            {
               var now = new Date();
               now.setMonth( now.getMonth() + 1 );
               cookievalue = escape(document.myform.customer.value) + ";"
               
               document.cookie="name=" + cookievalue;
               document.cookie = "expires=" + now.toUTCString() + ";"
               document.write ("Setting Cookies : " + "name=" + cookievalue );
            }
         //--&gt;
      &lt;/script&gt;
      
   &lt;/head&gt;
   &lt;body&gt;
   
      &lt;form name="formname" action=""&gt;
         Enter name: &lt;input type="text" name="customer"/&gt;
         &lt;input type="button" value="Set Cookie" onclick="WriteCookie()"/&gt;
      &lt;/form&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/setting_cookies.htm" height="70px" width="600px"></iframe>
<h2>Deleting a Cookie</h2>
<p>Sometimes you will want to delete a cookie so that subsequent attempts to read the cookie return nothing. To do this, you just need to set the expiry date to a time in the past.</p>
<h3>Example</h3>
<p>Try the following example. It illustrates how to delete a cookie by setting its expiry date to one month behind the current date.</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   &lt;head&gt;
   
      &lt;script type="text/javascript"&gt;
         &lt;!--
            function WriteCookie()
            {
               var now = new Date();
               now.setMonth( now.getMonth() - 1 );
               cookievalue = escape(document.myform.customer.value) + ";"
               
               document.cookie="name=" + cookievalue;
               document.cookie = "expires=" + now.toUTCString() + ";"
               document.write("Setting Cookies : " + "name=" + cookievalue );
            }
          //--&gt;
      &lt;/script&gt;
      
   &lt;/head&gt;
   &lt;body&gt;
   
      &lt;form name="formname" action=""&gt;
         Enter name: &lt;input type="text" name="customer"/&gt;
         &lt;input type="button" value="Set Cookie" onclick="WriteCookie()"/&gt;
      &lt;/form&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/deleting_cookies.htm" height="70px" width="600px"></iframe>
<h1>JavaScript - Page Redirection</h1>
<h2>What is Page Redirection ?</h2>
<p>You might have encountered a situation where you clicked a URL to reach a page X but internally you were directed to another page Y. It happens due to <b>page redirection</b>. This concept is different from <a href="/javascript/javascript_page_refresh.htm" title="JavaScript Page Refresh">JavaScript Page Refresh</a>.</p>
<p>There could be various reasons why you would like to redirect a user from the original page. We are listing down a few of the reasons &minus;</p>
<ul class="list">
<li><p>You did not like the name of your domain and you are moving to a new one. In such a scenario, you may want to direct all your visitors to the new site. Here you can maintain your old domain but put a single page with a page redirection such that all your old domain visitors can come to your new domain.</p></li>
<li><p>You have built-up various pages based on browser versions or their names or may be based on different countries, then instead of using your server-side page redirection, you can use client-side page redirection to land your users on the appropriate page.</p></li>
<li><p>The Search Engines may have already indexed your pages. But while moving to another domain, you would not like to lose your visitors coming through search engines. So you can use client-side page redirection. But keep in mind this should not be done to fool the search engine, it could lead your site to get banned.</p></li>
</ul>
<h2>How Page Re-direction Works ?</h2>
<p>The implementations of Page-Redirection are as follows.</p>
<h3>Example 1</h3>
<p>It is quite simple to do a page redirect using JavaScript at client side. To redirect your site visitors to a new page, you just need to add a line in your head section as follows.</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   &lt;head&gt;
      
      &lt;script type="text/javascript"&gt;
         &lt;!--
            function Redirect() {
               window.location="http://www.tutorialspoint.com";
            }
         //--&gt;
      &lt;/script&gt;
      
   &lt;/head&gt;
   
   &lt;body&gt;
      &lt;p&gt;Click the following button, you will be redirected to home page.&lt;/p&gt;
      
      &lt;form&gt;
         &lt;input type="button" value="Redirect Me" onclick="Redirect();" /&gt;
      &lt;/form&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/redirect.htm" height="120px" width="600px"></iframe>
<h3>Example 2</h3>
<p>You can show an appropriate message to your site visitors before redirecting them to a new page. This would need a bit time delay to load a new page. The following example shows how to implement the same. Here setTimeout() is a built-in JavaScript function which can be used to execute another function after a given time interval.</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   &lt;head&gt;
   
      &lt;script type="text/javascript"&gt;
         &lt;!--
            function Redirect() {
               window.location="http://www.tutorialspoint.com";
            }
            
            document.write("You will be redirected to main page in 10 sec.");
            setTimeout('Redirect()', 10000);
         //--&gt;
      &lt;/script&gt;
      
   &lt;/head&gt;
   
   &lt;body&gt;
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/redirect2.htm" height="120px" width="600px"></iframe>
<pre class="result notranslate">
You will be redirected to tutorialspoint.com main page in 10 seconds!
</pre>
<h3>Example 3</h3>
<p>The following example shows how to redirect your site visitors onto a different page based on their browsers.</p>
<pre class="prettyprint notranslate">
&lt;html&gt;
   &lt;head&gt;
   
      &lt;script type="text/javascript"&gt;
         &lt;!--
            var browsername=navigator.appName;
            if( browsername == "Netscape" )
            {
               window.location="http://www.location.com/ns.htm";
            }
            else if ( browsername =="Microsoft Internet Explorer")
            {
               window.location="http://www.location.com/ie.htm";
            }
            else
            {
               window.location="http://www.location.com/other.htm";
            }
         //--&gt;
      &lt;/script&gt;
      
   &lt;/head&gt;
   
   &lt;body&gt;
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h1>JavaScript - Dialog Boxes</h1>
<p>JavaScript supports three important types of dialog boxes. These dialog boxes can be used to raise and alert, or to get confirmation on any input or to have a kind of input from the users. Here we will discuss each dialog box one by one.</p>
<h2>Alert Dialog Box</h2>
<p>An alert dialog box is mostly used to give a warning message to the users. For example, if one input field requires to enter some text but the user does not provide any input, then as a part of validation, you can use an alert box to give a warning message.</p>
<p>Nonetheless, an alert box can still be used for friendlier messages. Alert box gives only one button "OK" to select and proceed.</p>
<h3>Example</h3>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   &lt;head&gt;
   
      &lt;script type="text/javascript"&gt;
         &lt;!--
            function Warn() {
               alert ("This is a warning message!");
               document.write ("This is a warning message!");
            }
         //--&gt;
      &lt;/script&gt;
      
   &lt;/head&gt;
   &lt;body&gt;
      &lt;p&gt;Click the following button to see the result: &lt;/p&gt;
      
      &lt;form&gt;
         &lt;input type="button" value="Click Me" onclick="Warn();" /&gt;
      &lt;/form&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/alert_dialog_box.htm" height="90px" width="600px"></iframe>
<h2>Confirmation Dialog Box</h2>
<p>A confirmation dialog box is mostly used to take user's consent on any option. It displays a dialog box with two buttons: <b>Cancel</b>.</p>
<p>If the user clicks on the OK button, the window method <b>confirm()</b> will return true. If the user clicks on the Cancel button, then <b>confirm()</b> returns false. You can use a confirmation dialog box as follows.</p>
<h3>Output</h3>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   &lt;head&gt;
   
      &lt;script type="text/javascript"&gt;
         &lt;!--
            function getConfirmation(){
               var retVal = confirm("Do you want to continue ?");
               if( retVal == true ){
                  document.write ("User wants to continue!");
                  return true;
               }
               else{
                  Document.write ("User does not want to continue!");
                  return false;
               }
            }
         //--&gt;
      &lt;/script&gt;
      
   &lt;/head&gt;
   &lt;body&gt;
      &lt;p&gt;Click the following button to see the result: &lt;/p&gt;
      
      &lt;form&gt;
         &lt;input type="button" value="Click Me" onclick="getConfirmation();" /&gt;
      &lt;/form&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/confirmation_dialog_box.htm" height="90px" width="600px"></iframe>
<h2>Prompt Dialog Box</h2>
<p>The prompt dialog box is very useful when you want to pop-up a text box to get user input. Thus, it enables you to interact with the user. The user needs to fill in the field and then click OK.</p>
<p>This dialog box is displayed using a method called <b>prompt()</b> which takes two parameters: (i) a label which you want to display in the text box and (ii) a default string to display in the text box.</p>
<p>This dialog box has two buttons: <b>OK</b> and <b>Cancel</b>. If the user clicks the OK button, the window method <b>prompt()</b> will return the entered value from the text box. If the user clicks the Cancel button, the window method <b>prompt()</b> returns <b>null</b>.</p>
<h3>Example</h3>
<p>The following example shows how to use a prompt dialog box &minus;</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   &lt;head&gt;
      
      &lt;script type="text/javascript"&gt;
         &lt;!--
            function getValue(){
               var retVal = prompt("Enter your name : ", "your name here");
               document.write("You have entered : " + retVal);
            }
         //--&gt;
      &lt;/script&gt;
      
   &lt;/head&gt;
   
   &lt;body&gt;
      &lt;p&gt;Click the following button to see the result: &lt;/p&gt;
      
      &lt;form&gt;
         &lt;input type="button" value="Click Me" onclick="getValue();" /&gt;
      &lt;/form&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/prompt_dialog_box.htm" height="90px" width="600px"></iframe>
<h1>JavaScript - Void Keyword</h1>
<p><b>void</b> is an important keyword in JavaScript which can be used as a unary operator that appears before its single operand, which may be of any type. This operator specifies an expression to be evaluated without returning a value.</p>
<h3>Syntax</h3>
<p>The syntax of <b>void</b> can be either of the following two &minus;</p>
<pre class="prettyprint notranslate">
&lt;head&gt;

   &lt;script type="text/javascript"&gt;
      &lt;!--
         void func()
         javascript:void func()
      
         or:
      
         void(func())
         javascript:void(func())
      //--&gt;
   &lt;/script&gt;
   
&lt;/head&gt;
</pre>
<h3>Example 1</h3>
<p>The most common use of this operator is in a client-side <i>javascript:</i> URL, where it allows you to evaluate an expression for its side-effects without the browser displaying the value of the evaluated expression.</p>
<p>Here the expression <b>alert ('Warning!!!')</b> is evaluated but it is not loaded back into the current document &minus;</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   &lt;head&gt;
   
      &lt;script type="text/javascript"&gt;
         &lt;!--
         //--&gt;
      &lt;/script&gt;
      
   &lt;/head&gt;
   &lt;body&gt;
   
      &lt;p&gt;Click the following, This won't react at all...&lt;/p&gt;
      &lt;a href="javascript:void(alert('Warning!!!'))"&gt;Click me!&lt;/a&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/void.htm" height="90px" width="600px"></iframe>
<h3>Example 2</h3>
<p>Take a look at the following example. The following link does nothing because the expression "0" has no effect in JavaScript. Here the expression "0" is evaluated, but it is not loaded back into the current document.</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   &lt;head&gt;
   
      &lt;script type="text/javascript"&gt;
         &lt;!--
         //--&gt;
      &lt;/script&gt;
      
   &lt;/head&gt;
   &lt;body&gt;
   
      &lt;p&gt;Click the following, This won't react at all...&lt;/p&gt;
      &lt;a href="javascript:void(0)"&gt;Click me!&lt;/a&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/void1.htm" height="90px" width="600px"></iframe>
<h3>Example 3</h3>
<p>Another use of <b>void</b> is to purposely generate the <b>undefined</b> value as follows.</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   &lt;head&gt;
      
      &lt;script type="text/javascript"&gt;
         &lt;!--
            function getValue(){
               var a,b,c;
               
               a = void ( b = 5, c = 7 );
               document.write('a = ' + a + ' b = ' + b +' c = ' + c );
            }
         //--&gt;
      &lt;/script&gt;
      
   &lt;/head&gt;
   
   &lt;body&gt;
      &lt;p&gt;Click the following to see the result:&lt;/p&gt;
      
      &lt;form&gt;
         &lt;input type="button" value="Click Me" onclick="getValue();" /&gt;
      &lt;/form&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/void3.htm" height="90px" width="600px"></iframe>
<h1>JavaScript - Page Printing</h1>
<p>Many times you would like to place a button on your webpage to print the content of that web page via an actual printer. JavaScript helps you to implement this functionality using the <b>print</b> function of <b>window</b> object.</p>
<p>The JavaScript print function <b>window.print()</b> prints the current web page when executed. You can call this function directly using the <b>onclick</b> event as shown in the following example.</p>
<h3>Example</h3>
<p>Try the following example.</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   &lt;head&gt;
      
      &lt;script type="text/javascript"&gt;
         &lt;!--
         //--&gt;
      &lt;/script&gt;
   
   &lt;/head&gt;
   
   &lt;body&gt;
      
      &lt;form&gt;
         &lt;input type="button" value="Print" onclick="window.print()" /&gt;
      &lt;/form&gt;
   
   &lt;/body&gt;
&lt;html&gt;
</pre>
<h3>Output</h3>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/page_print.htm" height="60px" width="600px"></iframe>
<p>Although it serves the purpose of getting a printout, it is not a recommended way. A printer friendly page is really just a page with text, no images, graphics, or advertising.</p>
<p>You can make a page printer friendly in the following ways &minus;</p>
<ul class="list">
<li><p>Make a copy of the page and leave out unwanted text and graphics, then link to that printer friendly page from the original. Check <a href="/javascript/printfriendly.htm" target="_blank">Example</a>.</p></li>
<li><p>If you do not want to keep an extra copy of a page, then you can mark your printable text using proper comments like &lt;!-- PRINT STARTS HERE --&gt;..... &lt;!-- PRINT ENDS HERE --&gt; and then you can use PERL or any other script in the background to purge printable text and display for final printing. We at Tutorialspoint use this method to provide print facility to our site visitors. Check <a href='/cgi-bin/printversion.cgi?tutorial=javascript&amp;file=javascript_page_printing.htm' target="_blank">Example</a>.</p>
</li>
</ul>
<h2>How to Print a Page</h2>
<p>If you don’t find the above facilities on a web page, then you can use the browser's standard toolbar to get print the web page. Follow the link as follows.</p>
<pre class="prettyprint notranslate">
File &rarr;  Print &rarr; Click OK  button.
</pre>
<h1>JavaScript - Objects Overview</h1>
<p>JavaScript is an Object Oriented Programming (OOP) language. A programming language can be called object-oriented if it provides four basic capabilities to developers &minus;</p>
<ul class="list">
<li><p><b>Encapsulation</b> &minus; the capability to store related information, whether data or methods, together in an object.</p></li>
<li><p><b>Aggregation</b> &minus; the capability to store one object inside another object.</p></li>
<li><p><b>Inheritance</b> &minus; the capability of a class to rely upon another class (or number of classes) for some of its properties and methods.</p></li>
<li><p><b>Polymorphism</b> &minus; the capability to write one function or method that works in a variety of different ways.</p></li>
</ul>
<p>Objects are composed of attributes. If an attribute contains a function, it is considered to be a method of the object, otherwise the attribute is considered a property.</p>
<h2>Object Properties</h2>
<p>Object properties can be any of the three primitive data types, or any of the abstract data types, such as another object. Object properties are usually variables that are used internally in the object's methods, but can also be globally visible variables that are used throughout the page.</p>
<p>The syntax for adding a property to an object is &minus;</p>
<pre class="prettyprint notranslate">
objectName.objectProperty = propertyValue;
</pre>
<p><b>For example</b> &minus; The following code gets the document title using the <b>"title"</b> property of the <b>document</b> object.</p>
<pre class="prettyprint notranslate">
var str = document.title;
</pre>
<h2>Object Methods</h2>
<p>Methods are the functions that let the object do something or let something be done to it. There is a small difference between a function and a method – at a function is a standalone unit of statements and a method is attached to an object and can be referenced by the <b>this</b> keyword.</p>
<p>Methods are useful for everything from displaying the contents of the object to the screen to performing complex mathematical operations on a group of local properties and parameters.</p>
<p><b>For example</b> &minus; Following is a simple example to show how to use the <b>write()</b> method of document object to write any content on the document.</p>
<pre class="prettyprint notranslate">
document.write("This is test");
</pre>
<h2>User-Defined Objects</h2>
<p>All user-defined objects and built-in objects are descendants of an object called <b>Object</b>.</p>
<h3>The new Operator</h3>
<p>The <b>new</b> operator is used to create an instance of an object. To create an object, the <b>new</b> operator is followed by the constructor method.</p> 
<p>In the following example, the constructor methods are Object(), Array(), and Date(). These constructors are built-in JavaScript functions.</p>
<pre class="prettyprint notranslate">
var employee = new Object();
var books = new Array("C++", "Perl", "Java");
var day = new Date("August 15, 1947");
</pre>
<h3>The Object() Constructor</h3>
<p>A constructor is a function that creates and initializes an object. JavaScript provides a special constructor function called <b>Object()</b> to build the object. The return value of the <b>Object()</b> constructor is assigned to a variable.</p>
<p>The variable contains a reference to the new object. The properties assigned to the object are not variables and are not defined with the <b>var</b> keyword.</p>
<h3>Example 1</h3>
<p>Try the following example; it demonstrates how to create an Object.</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   &lt;head&gt;
      &lt;title&gt;User-defined objects&lt;/title&gt;
      
      &lt;script type="text/javascript"&gt;
         var book = new Object();   // Create the object
         book.subject = "Perl"; // Assign properties to the object
         book.author  = "Mohtashim";
      &lt;/script&gt;
      
   &lt;/head&gt;
   
   &lt;body&gt;
   
      &lt;script type="text/javascript"&gt;
         document.write("Book name is : " + book.subject + "&lt;br&gt;");
         document.write("Book author is : " + book.author + "&lt;br&gt;");
      &lt;/script&gt;
   
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<pre class="result notranslate">
Book name is : Perl 
Book author is : Mohtashim
</pre>
<h3>Example 2</h3>
<p>This example demonstrates how to create an object with a User-Defined Function. Here <b>this</b> keyword is used to refer to the object that has been passed to a function.</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   &lt;head&gt;
   
   &lt;title&gt;User-defined objects&lt;/title&gt;
   
      &lt;script type="text/javascript"&gt;
         function book(title, author){
            this.title = title; 
            this.author  = author;
         }
      &lt;/script&gt;
      
   &lt;/head&gt;
   &lt;body&gt;
   
      &lt;script type="text/javascript"&gt;
         var myBook = new book("Perl", "Mohtashim");
         document.write("Book title is : " + myBook.title + "&lt;br&gt;");
         document.write("Book author is : " + myBook.author + "&lt;br&gt;");
      &lt;/script&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<pre class="result notranslate">
Book title is : Perl 
Book author is : Mohtashim
</pre>
<h2>Defining Methods for an Object</h2>
<p>The previous examples demonstrate how the constructor creates the object and assigns properties. But we need to complete the definition of an object by assigning methods to it.</p>
<h3>Example</h3>
<p>Try the following example; it shows how to add a function along with an object.</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   &lt;head&gt;
   &lt;title&gt;User-defined objects&lt;/title&gt;
   
      &lt;script type="text/javascript"&gt;
         // Define a function which will work as a method
         function addPrice(amount){
            this.price = amount; 
         }
         
         function book(title, author){
            this.title = title;
            this.author  = author;
            this.addPrice = addPrice; // Assign that method as property.
         }
      &lt;/script&gt;
      
   &lt;/head&gt;
   &lt;body&gt;
   
      &lt;script type="text/javascript"&gt;
         var myBook = new book("Perl", "Mohtashim");
         myBook.addPrice(100);
         
         document.write("Book title is : " + myBook.title + "&lt;br&gt;");
         document.write("Book author is : " + myBook.author + "&lt;br&gt;");
         document.write("Book price is : " + myBook.price + "&lt;br&gt;");
      &lt;/script&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<pre class="result notranslate">
Book title is : Perl 
Book author is : Mohtashim 
Book price is : 100
</pre>
<h2>The 'with' Keyword</h2>
<p>The <b>‘with’</b> keyword is used as a kind of shorthand for referencing an object's properties or methods.</p>
<p>The object specified as an argument to <b>with</b> becomes the default object for the duration of the block that follows. The properties and methods for the object can be used without naming the object.</p>
<h3>Syntax</h3>
<p>The syntax for with object is as follows &minus;</p>
<pre class="prettyprint notranslate">
with (object){
   properties used without the object name and dot
}
</pre>
<h3>Example</h3>
<p>Try the following example.</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   &lt;head&gt;
   &lt;title&gt;User-defined objects&lt;/title&gt;
   
      &lt;script type="text/javascript"&gt;
         // Define a function which will work as a method
         function addPrice(amount){
            with(this){
               price = amount;
            }
         }
         
         function book(title, author){
            this.title = title;
            this.author  = author;
            this.price = 0;
            this.addPrice = addPrice; // Assign that method as property.
         }
      &lt;/script&gt;
      
   &lt;/head&gt;
   &lt;body&gt;
   
      &lt;script type="text/javascript"&gt;
         var myBook = new book("Perl", "Mohtashim");
         myBook.addPrice(100);
         
         document.write("Book title is : " + myBook.title + "&lt;br&gt;");
         document.write("Book author is : " + myBook.author + "&lt;br&gt;");
         document.write("Book price is : " + myBook.price + "&lt;br&gt;");
      &lt;/script&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
</pre>
</h3>Output</h3>
<pre class="result notranslate">
Book title is : Perl 
Book author is : Mohtashim 
Book price is : 100
</pre>
<h2>JavaScript Native Objects</h2>
<p>JavaScript has several built-in or native objects. These objects are accessible anywhere in your program and will work the same way in any browser running in any operating system.</p>
<p>Here is the list of all important JavaScript Native Objects &minus;</p>
<ul class="list">
<li><p><a href="/javascript/javascript_number_object.htm">JavaScript Number Object</a></p></li>
<li><p><a href="/javascript/javascript_boolean_object.htm">JavaScript Boolean Object</a></p></li>
<li><p><a href="/javascript/javascript_strings_object.htm">JavaScript String Object</a></p></li>
<li><p><a href="/javascript/javascript_arrays_object.htm">JavaScript Array Object</a></p></li>
<li><p><a href="/javascript/javascript_date_object.htm">JavaScript Date Object</a></p></li>
<li><p><a href="/javascript/javascript_math_object.htm">JavaScript Math Object</a></p></li>
<li><p><a href="/javascript/javascript_regexp_object.htm">JavaScript RegExp Object</a></p></li>
</ul>
<h1>JavaScript - The Number Object</h1>
<p>The <b>Number</b> object represents numerical date, either integers or floating-point numbers. In general, you do not need to worry about <b>Number</b> objects because the browser automatically converts number literals to instances of the number class.</p>
<h3>Syntax</h3>
<p>The syntax for creating a <b>number</b> object is as follows &minus;</p>
<pre class="prettyprint notranslate">
var val = new Number(number);
</pre>
<p>In the place of number, if you provide any non-number argument, then the argument cannot be converted into a number, it returns <b>NaN</b> (Not-a-Number).</p>
<h2>Number  Properties</h2>
<p>Here is a list of each property and their description.</p>
<table class="table table-bordered">
<tr>
<th width="20%">Property</th>
<th width="80%">Description</th>
</tr>
<tr>
<td><p><a href="/javascript/number_max_value.htm">MAX_VALUE</a></p></td>
<td>The largest possible value a number in JavaScript can have 1.7976931348623157E+308</td>
</tr>
<tr>
<td><p><a href="/javascript/number_min_value.htm">MIN_VALUE</a></p></td>
<td>The smallest possible value a number in JavaScript can have 5E-324</td>
</tr>
<tr>
<td><p><a href="/javascript/number_nan.htm">NaN</a></p></td>
<td>Equal to a value that is not a number.</td>
</tr>
<tr>
<td><p><a href="/javascript/number_negative_infinity.htm">NEGATIVE_INFINITY</a></p></td>
<td>A value that is less than MIN_VALUE.</td>
</tr>
<tr>
<td><p><a href="/javascript/number_positive_infinity.htm">POSITIVE_INFINITY</a></p></td>
<td>A value that is greater than MAX_VALUE</td>
</tr>
<tr>
<td><p><a href="/javascript/object_prototype.htm">prototype</a></p></td>
<td>A static property of the Number object. Use the prototype property to assign new properties and methods to the Number object in the current document</td>
</tr>
<tr>
<td><p><a href="/javascript/number_constructor.htm">constructor</a></p></td>
<td>Returns the function that created this object's instance. By default this is the Number object.</td>
</tr>
</table>
<p>In the following sections, we will take a few examples to demonstrate the properties of Number.</p>
<h2>Number  Methods</h2>
<p>The Number object contains only the default methods that are a part of every object's definition.</p>
<table class="table table-bordered">
<tr>
<th width="20%">Method</th>
<th width="80%">Description</th>
</tr>
<tr>
<td><p><a href="/javascript/number_toexponential.htm">toExponential()</a></p></td>
<td>Forces a number to display in exponential notation, even if the number is in the range in which JavaScript normally uses standard notation.</td>
</tr>
<tr>
<td><p><a href="/javascript/number_tofixed.htm">toFixed()</a></p></td>
<td>Formats a number with a specific number of digits to the right of the decimal.</td>
</tr>
<tr>
<td><p><a href="/javascript/number_tolocalestring.htm">toLocaleString()</a></p></td>
<td>Returns a string value version of the current number in a format that may vary according to a browser's local settings.</td>
</tr>
<tr>
<td><p><a href="/javascript/number_toprecision.htm">toPrecision()</a></p></td>
<td>Defines how many total digits (including digits to the left and right of the decimal) to display of a number.</td>
</tr>
<tr>
<td><p><a href="/javascript/number_tostring.htm">toString()</a></p></td>
<td>Returns the string representation of the number's value.</td>
</tr>
<tr>
<td><p><a href="/javascript/number_valueof.htm">valueOf()</a></p></td>
<td>Returns the number's value.</td>
</tr>
</table>
<p>In the following sections, we will have a few examples to explain the methods of Number.</p>
<h1>JavaScript - The Boolean Object</h1>
<p>The <b>Boolean</b> object represents two values, either "true" or "false". If <i>value</i> parameter is omitted or is 0, -0, null, false, <b>NaN,</b> undefined, or the empty string (""), the object has an initial value of false.</p>
<h3>Syntax</h3>
<p>Use the following syntax to create a <b>boolean</b> object.</p>
<pre class="prettyprint notranslate">
var val = new Boolean(value);
</pre>
<h2>Boolean  Properties</h2>
<p>Here is a list of the properties of Boolean object &minus;</p>
<table class="table table-bordered">
<tr>
<th width="20%">Property</th>
<th width="80%">Description</th>
</tr>
<tr>
<td><p><a href="/javascript/boolean_constructor.htm">constructor </a></p></td>
<td>Returns a reference to the Boolean function that created the object.</td>
</tr>
<tr>
<td><p><a href="/javascript/object_prototype.htm">prototype</a></p></td>
<td>The prototype property allows you to add properties and methods to an object.</td>
</tr>
</table>
<p>In the following sections, we will have a few examples to illustrate the properties of Boolean object.</p>
<h2>Boolean  Methods</h2>
<p>Here is a list of the methods of Boolean object and their description.</p>
<table class="table table-bordered">
<tr>
<th width="20%">Method</th>
<th width="80%">Description</th>
</tr>
<tr>
<td><p><a href="/javascript/boolean_tosource.htm">toSource()</a></p></td>
<td>Returns a string containing the source of the Boolean object; you can use this string to create an equivalent object.</td>
</tr>
<tr>
<td><p><a href="/javascript/boolean_tostring.htm">toString()</a></p></td>
<td>Returns a string of either "true" or "false" depending upon the value of the object.</td>
</tr>
<tr>
<td><p><a href="/javascript/boolean_valueof.htm">valueOf()</a></p></td>
<td>Returns the primitive value of the Boolean object.</td>
</tr>
</table>
<p>In the following sections, we will have a few examples to demonstrate the usage of the Boolean methods.</p>
<h1>JavaScript - The Strings Object</h1>
<p>The <b>String</b> object lets you work with a series of characters; it wraps Javascript's string primitive data type with a number of helper methods.</p>
<p>As JavaScript automatically converts between string primitives and String objects, you can call any of the helper methods of the String object on a string primitive.</p>
<h3>Syntax</h3>
<p>Use the following syntax to create a String object &minus;</p>
<pre class="prettyprint notranslate">
var val = new String(string);
</pre>
<p>The <b>String</b> parameter is a series of characters that has been properly encoded.</p>
<h2>String  Properties</h2>
<p>Here is a list of the properties of String object and their description.</p>
<table class="table table-bordered">
<tr>
<th width="20%">Property</th>
<th width="80%">Description</th>
</tr>
<tr>
<td><p><a href="/javascript/string_constructor.htm">constructor </a></p></td>
<td>Returns a reference to the String function that created the object.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_length.htm">length </a></p></td>
<td>Returns the length of the string.</td>
</tr>
<tr>
<td><p><a href="/javascript/object_prototype.htm">prototype</a></p></td>
<td>The prototype property allows you to add properties and methods to an object.</td>
</tr>
</table>
<p>In the following sections, we will have a few examples to demonstrate the usage of String properties.</p>
<h2>String  Methods</h2>
<p>Here is a list of the methods available in String object along with their description.</p>
<table class="table table-bordered">
<tr>
<th width="20%">Method</th>
<th width="80%">Description</th>
</tr>
<tr>
<td><p><a href="/javascript/string_charat.htm">charAt()</a></p></td>
<td>Returns the character at the specified index.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_charcodeat.htm">charCodeAt()</a></p></td>
<td>Returns a number indicating the Unicode value of the character at the given index.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_concat.htm">concat()</a></p></td>
<td>Combines the text of two strings and returns a new string.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_indexof.htm">indexOf()</a></p></td>
<td>Returns the index within the calling String object of the first occurrence of the specified value, or -1 if not found.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_lastindexof.htm">lastIndexOf()</a></p></td>
<td>Returns the index within the calling String object of the last occurrence of the specified value, or -1 if not found.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_localecompare.htm">localeCompare()</a></p></td>
<td>Returns a number indicating whether a reference string comes before or after or is the same as the given string in sort order.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_match.htm">match()</a></p></td>
<td>Used to match a regular expression against a string.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_replace.htm">replace()</a></p></td>
<td>Used to find a match between a regular expression and a string, and to replace the matched substring with a new substring.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_search.htm">search()</a></p></td>
<td>Executes the search for a match between a regular expression and a specified string.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_slice.htm">slice()</a></p></td>
<td>Extracts a section of a string and returns a new string.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_split.htm">split()</a></p></td>
<td>Splits a String object into an array of strings by separating the string into substrings.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_substr.htm">substr()</a></p></td>
<td>Returns the characters in a string beginning at the specified location through the specified number of characters.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_substring.htm">substring()</a></p></td>
<td>Returns the characters in a string between two indexes into the string.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_tolocalelowercase.htm">toLocaleLowerCase()</a></p></td>
<td>The characters within a string are converted to lower case while respecting the current locale.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_tolocaleuppercase.htm">toLocaleUpperCase()</a></p></td>
<td>The characters within a string are converted to upper case while respecting the current locale.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_tolowercase.htm">toLowerCase()</a></p></td>
<td>Returns the calling string value converted to lower case.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_tostring.htm">toString()</a></p></td>
<td>Returns a string representing the specified object.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_touppercase.htm">toUpperCase()</a></p></td>
<td>Returns the calling string value converted to uppercase.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_valueof.htm">valueOf()</a></p></td>
<td>Returns the primitive value of the specified object.</td>
</tr>
</table>
<h2>String HTML Wrappers</h2>
<p>Here is a list of the methods that return a copy of the string wrapped inside an appropriate HTML tag.</p>
<table class="table table-bordered">
<tr>
<th width="20%">Method</th>
<th width="80%">Description</th>
</tr>
<tr>
<td><p><a href="/javascript/string_anchor.htm">anchor()</a></p></td>
<td>Creates an HTML anchor that is used as a hypertext target.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_big.htm">big()</a></p></td>
<td>Creates a string to be displayed in a big font as if it were in a &lt;big&gt; tag.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_blink.htm">blink()</a></p></td>
<td>Creates a string to blink as if it were in a &lt;blink&gt; tag.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_bold.htm">bold()</a></p></td>
<td>Creates a string to be displayed as bold as if it were in a &lt;b&gt; tag.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_fixed.htm">fixed()</a></p></td>
<td>Causes a string to be displayed in fixed-pitch font as if it were in a &lt;tt&gt; tag</td>
</tr>
<tr>
<td><p><a href="/javascript/string_fontcolor.htm">fontcolor()</a></p></td>
<td>Causes a string to be displayed in the specified color as if it were in a &lt;font color="color"&gt; tag.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_fontsize.htm">fontsize()</a></p></td>
<td>Causes a string to be displayed in the specified font size as if it were in a &lt;font size="size"&gt; tag.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_italics.htm">italics()</a></p></td>
<td>Causes a string to be italic, as if it were in an &lt;i&gt; tag.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_link.htm">link()</a></p></td>
<td>Creates an HTML hypertext link that requests another URL.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_small.htm">small()</a></p></td>
<td>Causes a string to be displayed in a small font, as if it were in a &lt;small&gt; tag.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_strike.htm">strike()</a></p></td>
<td>Causes a string to be displayed as struck-out text, as if it were in a &lt;strike&gt; tag.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_sub.htm">sub()</a></p></td>
<td>Causes a string to be displayed as a subscript, as if it were in a &lt;sub&gt; tag</td>
</tr> 
<tr>
<td><p><a href="/javascript/string_sup.htm">sup()</a></p></td>
<td>Causes a string to be displayed as a superscript, as if it were in a &lt;sup&gt; tag</td>
</tr>
</table>
<p>In the following sections, we will have a few examples to demonstrate the usage of String methods.</p>
<h1>JavaScript  - The Arrays Object</h1>
<p>The <b>Array</b> object lets you store multiple values in a single variable. It stores a fixed-size sequential collection of elements of the same type. An array is used to store a collection of data, but it is often more useful to think of an array as a collection of variables of the same type.</p>
<h3>Syntax</h3>
<p>Use the following syntax to create an <b>Array</b> object &minus;</p>
<pre class="prettyprint notranslate">
var fruits = new Array( "apple", "orange", "mango" );
</pre>
<p>The <b>Array</b> parameter is a list of strings or integers. When you specify a single numeric parameter with the Array constructor, you specify the initial length of the array. The maximum length allowed for an array is 4,294,967,295.</p>
<p>You can create array by simply assigning values as follows &minus;</p>
<pre class="prettyprint notranslate">
var fruits = [ "apple", "orange", "mango" ];
</pre>
<p>You will use ordinal numbers to access and to set values inside an array as follows.</p>
<pre class="prettyprint notranslate">
fruits[0] is the first element
fruits[1] is the second element
fruits[2] is the third element
</pre>
<h2>Array  Properties</h2>
<p>Here is a list of the properties of the Array object along with their description.</p>
<table class="table table-bordered">
<tr>
<th width="20%">Property</th>
<th width="80%">Description</th>
</tr>
<tr>
<td><p><a href="/javascript/array_constructor.htm">constructor </a></p></td>
<td>Returns a reference to the array function that created the object.</td>
</tr>
<tr>
<td>index</td>
<td>The property represents the zero-based index of the match in the string</td>
</tr>
<tr>
<td>input</td>
<td>This property is only present in arrays created by regular expression matches.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_length.htm">length </a></p></td>
<td>Reflects the number of elements in an array.</td>
</tr>
<tr>
<td><p><a href="/javascript/object_prototype.htm">prototype</a></p></td>
<td>The prototype property allows you to add properties and methods to an object.</td>
</tr>
</table>
<p>In the following sections, we will have a few examples to illustrate the usage of Array properties.</p>
<h2>Array  Methods</h2>
<p>Here is a list of the methods of the Array object along with their description.</p>
<table class="table table-bordered">
<tr>
<th width="20%">Method</th>
<th width="80%">Description</th>
</tr>
<tr>
<td><p><a href="/javascript/array_concat.htm">concat()</a></p></td>
<td>Returns a new array comprised of this array joined with other array(s) and/or value(s).</td>
</tr>
<tr>
<td><p><a href="/javascript/array_every.htm">every()</a></p></td>
<td>Returns true if every element in this array satisfies the provided testing function.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_filter.htm">filter()</a></p></td>
<td>Creates a new array with all of the elements of this array for which the provided filtering function returns true.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_foreach.htm">forEach()</a></p></td>
<td>Calls a function for each element in the array.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_indexof.htm">indexOf()</a></p></td>
<td>Returns the first (least) index of an element within the array equal to the specified value, or -1 if none is found.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_join.htm">join()</a></p></td>
<td>Joins all elements of an array into a string.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_lastindexof.htm">lastIndexOf()</a></p></td>
<td>Returns the last (greatest) index of an element within the array equal to the specified value, or -1 if none is found.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_map.htm">map()</a></p></td>
<td>Creates a new array with the results of calling a provided function on every element in this array.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_pop.htm">pop()</a></p></td>
<td>Removes the last element from an array and returns that element.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_push.htm">push()</a></p></td>
<td>Adds one or more elements to the end of an array and returns the new length of the array.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_reduce.htm">reduce()</a></p></td>
<td>Apply a function simultaneously against two values of the array (from left-to-right) as to reduce it to a single value.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_reduceright.htm">reduceRight()</a></p></td>
<td>Apply a function simultaneously against two values of the array (from right-to-left) as to reduce it to a single value.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_reverse.htm">reverse()</a></p></td>
<td>Reverses the order of the elements of an array -- the first becomes the last, and the last becomes the first.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_shift.htm">shift()</a></p></td>
<td>Removes the first element from an array and returns that element.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_slice.htm">slice()</a></p></td>
<td>Extracts a section of an array and returns a new array.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_some.htm">some()</a></p></td>
<td>Returns true if at least one element in this array satisfies the provided testing function.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_tosource.htm">toSource()</a></p></td>
<td>Represents the source code of an object</td>
</tr>
<tr>
<td><p><a href="/javascript/array_sort.htm">sort()</a></p></td>
<td>Sorts the elements of an array</td>
</tr>
<tr>
<td><p><a href="/javascript/array_splice.htm">splice()</a></p></td>
<td>Adds and/or removes elements from an array.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_tostring.htm">toString()</a></p></td>
<td>Returns a string representing the array and its elements.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_unshift.htm">unshift()</a></p></td>
<td>Adds one or more elements to the front of an array and returns the new length of the array.</td>
</tr>
</table>
<p>In the following sections, we will have a few examples to demonstrate the usage of Array methods.</p>
<h1>JavaScript - The Date Object</h1>
<p>The Date object is a datatype built into the JavaScript language. Date objects are created with the <b>new Date( )</b> as shown below.</p>
<p>Once a Date object is created, a number of methods allow you to operate on it. Most methods simply allow you to get and set the year, month, day, hour, minute, second, and millisecond fields of the object, using either local time or UTC (universal, or GMT) time.</p>
<p>The ECMAScript standard requires the Date object to be able to represent any date and time, to millisecond precision, within 100 million days before or after 1/1/1970. This is a range of plus or minus 273,785 years, so JavaScript can represent date and time till the year 275755.</p>
<h3>Syntax</h3>
<p>You can use any of the following syntaxes to create a Date object using Date() constructor.</p>
<pre class="prettyprint notranslate">
new Date( )
new Date(milliseconds)
new Date(datestring)
new Date(year,month,date[,hour,minute,second,millisecond ])
</pre>
<p><b>Note</b> &minus; Parameters in the brackets are always optional.</p>
<p>Here is a description of the parameters &minus;</p>
<ul class="list">
<li><p><b>No Argument</b> &minus; With no arguments, the Date() constructor creates a Date object set to the current date and time.</p></li>
<li><p><b>milliseconds</b> &minus; When one numeric argument is passed, it is taken as the internal numeric representation of the date in milliseconds, as returned by the getTime() method. For example, passing the argument 5000 creates a date that represents five seconds past midnight on 1/1/70.</p></li>
<li><p><b>datestring</b> &minus; When one string argument is passed, it is a string representation of a date, in the format accepted by the <b>Date.parse()</b> method.</p></li>
<li><p><b>7 agruments</b> &minus; To use the last form of the constructor shown above. Here is a description of each argument:</p></li>
<ul class="list">
<li><p><b>year</b> &minus; Integer value representing the year. For compatibility (in order to avoid the Y2K problem), you should always specify the year in full; use 1998, rather than 98.</p></li>
<li><p><b>month</b> &minus; Integer value representing the month, beginning with 0 for January to 11 for December.</p></li>
<li><p><b>date</b> &minus; Integer value representing the day of the month.</p></li>
<li><p><b>hour</b> &minus; Integer value representing the hour of the day (24-hour scale).</p></li>
<li><p><b>minute</b> &minus; Integer value representing the minute segment of a time reading.</p></li>
<li><p><b>second</b> &minus; Integer value representing the second segment of a time reading.</p></li>
<li><p><b>millisecond</b> &minus; Integer value representing the millisecond segment of a time reading.</p></li>
</ul>
</ul>
<h2>Date Properties</h2>
<p>Here is a list of the properties of the Date object along with their description.</p>
<table class="table table-bordered">
<tr>
<th width="20%">Property</th>
<th width="80%">Description</th>
</tr>
<tr>
<td><p><a href="/javascript/date_constructor.htm">constructor</a></p></td>
<td>Specifies the function that creates an object's prototype.</td>
</tr>
<tr>
<td><p><a href="/javascript/object_prototype.htm">prototype</a></p></td>
<td>The prototype property allows you to add properties and methods to an object</td>
</tr>
</table>
<p>In the following sections, we will have a few examples to demonstrate the usage of different Date properties.</p>
<h2>Date Methods</h2>
<p>Here is a list of the methods used with <b>Date</b> and their description.</p>
<table class="table table-bordered">
<tr>
<th width="30%">Method</th>
<th width="70%">Description</th></tr>
<tr><td><p><a href="/javascript/date_date.htm">Date()</a></p></td>
<td>Returns today's date and time</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getdate.htm">getDate()</a></p></td>
<td>Returns the day of the month for the specified date according to local time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getday.htm">getDay()</a></p></td>
<td>Returns the day of the week for the specified date according to local time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getfullyear.htm">getFullYear()</a></p></td>
<td>Returns the year of the specified date according to local time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_gethours.htm">getHours()</a></p></td>
<td>Returns the hour in the specified date according to local time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getmilliseconds.htm">getMilliseconds()</a></p></td>
<td>Returns the milliseconds in the specified date according to local time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getminutes.htm">getMinutes()</a></p></td>
<td>Returns the minutes in the specified date according to local time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getmonth.htm">getMonth()</a></p></td>
<td>Returns the month in the specified date according to local time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getseconds.htm">getSeconds()</a></p></td>
<td>Returns the seconds in the specified date according to local time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_gettime.htm">getTime()</a></p></td>
<td>Returns the numeric value of the specified date as the number of milliseconds since January 1, 1970, 00:00:00 UTC.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_gettimezoneoffset.htm">getTimezoneOffset()</a></p></td>
<td>Returns the time-zone offset in minutes for the current locale.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getutcdate.htm">getUTCDate()</a></p></td>
<td>Returns the day (date) of the month in the specified date according to universal time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getutcday.htm">getUTCDay()</a></p></td>
<td>Returns the day of the week in the specified date according to universal time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getutcfullyear.htm">getUTCFullYear()</a></p></td>
<td>Returns the year in the specified date according to universal time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getutchours.htm">getUTCHours()</a></p></td>
<td>Returns the hours in the specified date according to universal time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getutcmilliseconds.htm">getUTCMilliseconds()</a></p></td>
<td>Returns the milliseconds in the specified date according to universal time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getutcminutes.htm">getUTCMinutes()</a></p></td>
<td>Returns the minutes in the specified date according to universal time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getutcmonth.htm">getUTCMonth()</a></p></td>
<td>Returns the month in the specified date according to universal time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getutcseconds.htm">getUTCSeconds()</a></p></td>
<td>Returns the seconds in the specified date according to universal time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_getyear.htm">getYear()</a></p></td>
<td><b>Deprecated</b> - Returns the year in the specified date according to local time. Use getFullYear instead.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_setdate.htm">setDate()</a></p></td>
<td>Sets the day of the month for a specified date according to local time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_setfullyear.htm">setFullYear()</a></p></td>
<td>Sets the full year for a specified date according to local time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_sethours.htm">setHours()</a></p></td>
<td>Sets the hours for a specified date according to local time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_setmilliseconds.htm">setMilliseconds()</a></p></td>
<td>Sets the milliseconds for a specified date according to local time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_setminutes.htm">setMinutes()</a></p></td>
<td>Sets the minutes for a specified date according to local time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_setmonth.htm">setMonth()</a></p></td>
<td>Sets the month for a specified date according to local time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_setseconds.htm">setSeconds()</a></p></td>
<td>Sets the seconds for a specified date according to local time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_settime.htm">setTime()</a></p></td>
<td>Sets the Date object to the time represented by a number of milliseconds since January 1, 1970, 00:00:00 UTC.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_setutcdate.htm">setUTCDate()</a></p></td>
<td>Sets the day of the month for a specified date according to universal time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_setutcfullyear.htm">setUTCFullYear()</a></p></td>
<td>Sets the full year for a specified date according to universal time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_setutchours.htm">setUTCHours()</a></p></td>
<td>Sets the hour for a specified date according to universal time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_setutcmilliseconds.htm">setUTCMilliseconds()</a></p></td>
<td>Sets the milliseconds for a specified date according to universal time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_setutcminutes.htm">setUTCMinutes()</a></p></td>
<td>Sets the minutes for a specified date according to universal time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_setutcmonth.htm">setUTCMonth()</a></p></td>
<td>Sets the month for a specified date according to universal time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_setutcseconds.htm">setUTCSeconds()</a></p></td>
<td>Sets the seconds for a specified date according to universal time.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_setyear.htm">setYear()</a></p></td>
<td><b>Deprecated - </b> Sets the year for a specified date according to local time. Use setFullYear instead.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_todatestring.htm">toDateString()</a></p></td>
<td>Returns the "date" portion of the Date as a human-readable string.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_togmtstring.htm">toGMTString()</a></p></td>
<td><b>Deprecated - </b> Converts a date to a string, using the Internet GMT conventions. Use toUTCString instead.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_tolocaledatestring.htm">toLocaleDateString()</a></p></td>
<td>Returns the "date" portion of the Date as a string, using the current locale's conventions.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_tolocaleformat.htm">toLocaleFormat()</a></p></td>
<td>Converts a date to a string, using a format string.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_tolocalestring.htm">toLocaleString()</a></p></td>
<td>Converts a date to a string, using the current locale's conventions.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_tolocaletimestring.htm">toLocaleTimeString()</a></p></td>
<td>Returns the "time" portion of the Date as a string, using the current locale's conventions.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_tosource.htm">toSource()</a></p></td>
<td>Returns a string representing the source for an equivalent Date object; you can use this value to create a new object.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_tostring.htm">toString()</a></p></td>
<td>Returns a string representing the specified Date object.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_totimestring.htm">toTimeString()</a></p></td>
<td>Returns the "time" portion of the Date as a human-readable string.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_toutcstring.htm">toUTCString()</a></p></td>
<td>Converts a date to a string, using the universal time convention.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_valueof.htm">valueOf()</a></p></td>
<td>Returns the primitive value of a Date object.</td>
</tr>
</table>
<p>Converts a date to a string, using the universal time convention.</p>
<h2>Date Static Methods</h2>
<p>In addition to the many instance methods listed previously, the Date object also defines two static methods. These methods are invoked through the Date() constructor itself.</p>
<table class="table table-bordered">
<tr>
<th width="30%">Method</th>
<th width="70%">Description</th>
</tr>
<tr>
<td><p><a href="/javascript/date_parse.htm">Date.parse( )</a></p></td>
<td>Parses a string representation of a date and time and returns the internal millisecond representation of that date.</td>
</tr>
<tr>
<td><p><a href="/javascript/date_utc.htm">Date.UTC( )</a></p></td>
<td>Returns the millisecond representation of the specified UTC date and time.</td>
</tr>
</table>
<p>In the following sections, we will have a few examples to demonstrate the usages of Date Static methods.</p>
<h1>JavaScript - The Math Object</h1>
<p>The <b>math</b> object provides you properties and methods for mathematical constants and functions. Unlike other global objects, <b>Math</b> is not a constructor. All the properties and methods of <b>Math</b> are static and can be called by using Math as an object without creating it.</p>
<p>Thus, you refer to the constant <b>pi</b> as <b>Math.PI</b> and you call the <i>sine</i> function as <b>Math.sin(x)</b>, where x is the method's argument.</p>
<h3>Syntax</h3>
<p>The syntax to call the properties and methods of Math are as follows</p>
<pre class="prettyprint notranslate">
var pi_val = Math.PI;
var sine_val = Math.sin(30);
</pre>
<h2>Math  Properties</h2>
<p>Here is a list of all the properties of Math and their description.</p>
<table class="table table-bordered">
<tr>
<th width="20%">Property</th>
<th width="80%">Description</th>
</tr>
<tr>
<td><a href="/javascript/math_e.htm">E \</a></td>
<td>Euler's constant and the base of natural logarithms, approximately 2.718.</td>
</tr>
<tr>
<td><a href="/javascript/math_ln2.htm">LN2 </a></td>
<td>Natural logarithm of 2, approximately 0.693.</td>
</tr>
<tr>
<td><a href="/javascript/math_ln10.htm">LN10 </a></td>
<td>Natural logarithm of 10, approximately 2.302.</td>
</tr>
<tr>
<td><a href="/javascript/math_log2e.htm">LOG2E </a></td>
<td>Base 2 logarithm of E, approximately 1.442.</td>
</tr>
<tr>
<td><a href="/javascript/math_log10e.htm">LOG10E </a></td>
<td>Base 10 logarithm of E, approximately 0.434.</td>
</tr>
<tr>
<td><a href="/javascript/math_pi.htm">PI </a></td>
<td>Ratio of the circumference of a circle to its diameter, approximately 3.14159.</td>
</tr>
<tr>
<td><a href="/javascript/math_sqrt1_2.htm">SQRT1_2 </a></td>
<td>Square root of 1/2; equivalently, 1 over the square root of 2, approximately 0.707.</td>
</tr>
<tr>
<td><a href="/javascript/math_sqrt2.htm">SQRT2</a></td>
<td>Square root of 2, approximately 1.414.</td>
</tr>
</table>
<p>In the following sections, we will have a few examples to demonstrate the usage of Math properties.</p>
<h2>Math  Methods</h2>
<p>Here is a list of the methods associated with Math object and their description</p>
<table class="table table-bordered">
<tr>
<th width="20%">Method</th>
<th width="80%">Description</th></tr>
<tr><td><a href="/javascript/math_abs.htm">abs()</a></td>
<td>Returns the absolute value of a number.</td>
</tr>
<tr>
<td><a href="/javascript/math_acos.htm">acos()</a></td>
<td>Returns the arccosine (in radians) of a number.</td>
</tr>
<tr>
<td><a href="/javascript/math_asin.htm">asin()</a></td>
<td>Returns the arcsine (in radians) of a number.</td>
</tr>
<tr>
<td><a href="/javascript/math_atan.htm">atan()</a></td>
<td>Returns the arctangent (in radians) of a number.</td>
</tr>
<tr>
<td><a href="/javascript/math_atan2.htm">atan2()</a></td>
<td>Returns the arctangent of the quotient of its arguments.</td>
</tr>
<tr>
<td><a href="/javascript/math_ceil.htm">ceil()</a></td>
<td>Returns the smallest integer greater than or equal to a number.</td>
</tr>
<tr>
<td><a href="/javascript/math_cos.htm">cos()</a></td>
<td>Returns the cosine of a number.</td>
</tr>
<tr>
<td><a href="/javascript/math_exp.htm">exp()</a></td>
<td>Returns E<sup>N</sup>, where N is the argument, and E is Euler's constant, the base of the natural logarithm.</td>
</tr>
<tr>
<td><a href="/javascript/math_floor.htm">floor()</a></td>
<td>Returns the largest integer less than or equal to a number.</td>
</tr>
<tr>
<td><a href="/javascript/math_log.htm">log()</a></td>
<td>Returns the natural logarithm (base E) of a number.</td>
</tr>
<tr>
<td><a href="/javascript/math_max.htm">max()</a></td>
<td>Returns the largest of zero or more numbers.</td>
</tr>
<tr>
<td><a href="/javascript/math_min.htm">min()</a></td>
<td>Returns the smallest of zero or more numbers.</td>
</tr>
<tr>
<td><a href="/javascript/math_pow.htm">pow()</a></td>
<td>Returns base to the exponent power, that is, base exponent.</td>
</tr>
<tr>
<td><a href="/javascript/math_random.htm">random()</a></td>
<td>Returns a pseudo-random number between 0 and 1.</td>
</tr>
<tr>
<td><a href="/javascript/math_round.htm">round()</a></td>
<td>Returns the value of a number rounded to the nearest integer.</td>
</tr>
<tr>
<td><a href="/javascript/math_sin.htm">sin()</a></td>
<td>Returns the sine of a number.</td>
</tr>
<tr>
<td><a href="/javascript/math_sqrt.htm">sqrt()</a></td>
<td>Returns the square root of a number.</td>
</tr>
<tr>
<td><a href="/javascript/math_tan.htm">tan()</a></td>
<td>Returns the tangent of a number.</td>
</tr>
<tr>
<td><a href="/javascript/math_tosource.htm">toSource()</a></td>
<td>Returns the string "Math".</td>
</tr>
</table>
<p>In the following sections, we will have a few examples to demonstrate the usage of the methods associated with Math.</p>
<h1>Regular Expressions and RegExp Object</h1>
<p>A regular expression is an object that describes a pattern of characters.</p>
<p>The JavaScript <b>RegExp</b> class represents regular expressions, and both String and <b>RegExp</b> define methods that use regular expressions to perform powerful pattern-matching and search-and-replace functions on text.</p>
<h3>Syntax</h3>
<p>A regular expression could be defined with the <b>RegExp ()</b> constructor, as follows &minus;</p>
<pre class="prettyprint notranslate">
var pattern = new RegExp(pattern, attributes);

or simply

var pattern = /pattern/attributes;
</pre>
<p>Here is the description of the parameters &minus;</p>
<ul class="list">
<li><p><b>pattern</b> &minus; A string that specifies the pattern of the regular expression or another regular expression.</p></li>
<li><p><b>attributes</b> &minus; An optional string containing any of the "g", "i", and "m" attributes that specify global, case-insensitive, and multiline matches, respectively.</p></li>
</ul>
<h2>Brackets</h2>
<p>Brackets ([]) have a special meaning when used in the context of regular expressions. They are used to find a range of characters.</p>
<table class="table table-bordered">
<tr>
<th width="10%">Expression</th>
<th width="90%">Description</th>
</tr>
<tr>
<td>[...]</td>
<td>Any one character between the brackets.</td>
</tr>
<tr>
<td>[^...]</td>
<td>Any one character not between the brackets.</td>
</tr>
<tr>
<td>[0-9]</td>
<td>It matches any decimal digit from 0 through 9.</td>
</tr>
<tr>
<td>[a-z]</td>
<td>It matches any character from lowercase a through lowercase z.</td>
</tr>
<tr>
<td>[A-Z]</td>
<td>It matches any character from uppercase A through uppercase Z.</td>
</tr>
<tr>
<td>[a-Z]</td>
<td>It matches any character from lowercase a through uppercase Z.</td>
</tr>
</table>
<p>The ranges shown above are general; you could also use the range [0-3] to match any decimal digit ranging from 0 through 3, or the range [b-v] to match any lowercase character ranging from <b>b</b> through <b>v</b>.</p>
<h2>Quantifiers</h2>
<p>The frequency or position of bracketed character sequences and single characters can be denoted by a special character. Each special character has a specific connotation. The +, *, ?, and $ flags all follow a character sequence.</p>
<table class="table table-bordered">
<tr>
<th width="10%">Expression</th>
<th width="90%">Description</th>
</tr>
<tr>
<td>p+</td>
<td>It matches any string containing at least one p.</td>
</tr>
<tr>
<td>p*</td>
<td>It matches any string containing zero or more p's.</td>
</tr>
<tr>
<td>p?</td>
<td>It matches any string containing one or more p's.</td>
</tr>
<tr>
<td>p{<b>N</b>}</td>
<td>It matches any string containing a sequence of <b>N</b> p's</td>
</tr>
<tr>
<td>p{2,3}</td>
<td>It matches any string containing a sequence of two or three p's.</td>
</tr>
<tr>
<td>p{2, }</td>
<td>It matches any string containing a sequence of at least two p's.</td>
</tr>
<tr>
<td>p$</td>
<td>It  matches any string with p at the end of it.</td>
</tr>
<tr>
<td><b>^</b>p</td>
<td>It matches any string with p at the beginning of it.</td>
</tr>
</table>
<h3>Examples</h3>
<p>Following examples explain more about matching characters.</p>
<table class="table table-bordered">
<tr>
<th width="10%">Expression</th>
<th width="90%">Description</th>
</tr>
<tr>
<td>[^a-zA-Z]</td>
<td>It matches any string not containing any of the characters ranging from <b>a</b> through <b>z</b> and <b>A</b> through Z.</td>
</tr>
<tr>
<td>p.p</td>
<td>It matches any string containing <b>p,</b> followed by any character, in turn followed by another <b>p</b>.</td>
</tr>
<tr>
<td>^.{2}$</td>
<td>It matches any string containing exactly two characters.</td>
</tr>
<tr>
<td>&lt;b&gt;(.*)&lt;/b&gt;</td>
<td>It matches any string enclosed within &lt;b&gt; and &lt;/b&gt;.</td>
</tr>
<tr>
<td>p(hp)*</td>
<td>It matches any string containing a <b>p</b> followed by zero or more instances of the sequence <b>hp</b>.</td>
</tr>
</table>
<h2>Literal characters</h2>
<table class="table table-bordered">
<tr>
<th width="10%">Character</th>
<th width="90%">Description</th>
</tr>
<tr>
<td>Alphanumeric</td>
<td>Itself</td>
</tr>
<tr>
<td>\0</td>
<td>The NUL character (\u0000)</td>
</tr>
<tr>
<td>\t </td><td>Tab (\u0009)</td>
</tr>
<tr>
<td>\n</td>
<td>Newline (\u000A)</td>
</tr>
<tr>
<td>\v</td>
<td> Vertical tab (\u000B)</td>
</tr>
<tr>
<td>\f</td>
<td>Form feed (\u000C)</td>
</tr>
<tr>
<td>\r </td>
<td>Carriage return (\u000D)</td>
</tr>
<tr>
<td>\xnn</td>
<td>The Latin character specified by the hexadecimal number nn; for example, \x0A is the same as \n</td>
</tr>
<tr>
<td>\uxxxx</td>
<td>The Unicode character specified by the hexadecimal number xxxx; for example, \u0009 is the same as \t</td>
</tr>
<tr>
<td>\cX</td>
<td>The control character ^X; for example, \cJ is equivalent to the newline character \n</td>
</tr>
</table>
<h2>Metacharacters</h2>
<p>A metacharacter is simply an alphabetical character preceded by a backslash that acts to give the combination a special meaning.</p>
<p>For instance, you can search for a large sum of money using the '\d' metacharacter: <b>/([\d]+)000/</b>, Here <b>\d</b> will search for any string of numerical character.</p>
<p>The following table lists a set of metacharacters which can be used in PERL Style Regular Expressions.</p>
<table class="table table-bordered">
<tr>
<th>Character</th>		
<th>Description</th>
</tr>
<tr>
<td>.</td>              
<td>a single character</td>
</tr>
<tr>
<td>\s </td>            
<td>a whitespace character (space, tab, newline)</td>
</tr>
<tr>
<td>\S</td>             
<td>non-whitespace character</td>
</tr>
<tr>
<td>\d</td>             
<td>a digit (0-9)</td>
</tr>
<tr>
<td>\D</td>             
<td>a non-digit</td>
</tr>
<tr>
<td>\w</td>             
<td>a word character (a-z, A-Z, 0-9, _)</td>
</tr>
<tr>
<td>\W </td>            
<td>a non-word character</td>
</tr>
<tr>
<td>[\b]</td>           
<td>a literal backspace (special case).</td>
</tr>
<tr>
<td>[aeiou]</td>        
<td>matches a single character in the given set</td>
</tr>
<tr>
<td>[^aeiou]</td>       
<td>matches a single character outside the given set</td>
</tr>
<tr>
<td>(foo|bar|baz)</td>  
<td>matches any of the alternatives specified</td>
</tr>
</table>
<h2>Modifiers</h2>
<p>Several modifiers are available that can simplify the way you work with <b>regexps,</b> like case sensitivity, searching in multiple lines, etc.</p>
<table class="table table-bordered">
<tr>
<th width="10%">Modifier</th>
<th width="90%">Description</th>
</tr>
<tr>
<td>i</td>
<td>Perform case-insensitive matching.</td>
</tr>
<tr>
<td>m</td>
<td>Specifies that if the string has newline or carriage return characters, the ^ and $ operators will now match against a newline boundary, instead of a string boundary</td>
</tr>
<tr>
<td>g</td>
<td>Performs a global matchthat is, find all matches rather than stopping after the first match.</td>
</tr>
</table>
<h2>RegExp Properties</h2>
<p>Here is a list of the properties associated with RegExp and their description.</p>
<table class="table table-bordered">
<tr>
<th width="20%">Property</th>
<th width="80%">Description</th>
</tr>
<tr>
<td><a href="/javascript/regexp_constructor.htm">constructor</a></td>
<td>Specifies the function that creates an object's prototype.</td>
</tr>
<tr>
<td><a href="/javascript/regexp_global.htm">global</a></td>
<td>Specifies if the "g" modifier is set.</td>
</tr>
<tr>
<td><a href="/javascript/regexp_ignorecase.htm">ignoreCase</a></td>
<td>Specifies if the "i" modifier is set.</td>
</tr>
<tr>
<td><a href="/javascript/regexp_lastindex.htm">lastIndex</a></td>
<td>The index at which to start the next match.</td>
</tr>
<tr>
<td><a href="/javascript/regexp_multiline.htm">multiline</a></td>
<td>Specifies if the "m" modifier is set.</td>
</tr>
<tr>
<td><a href="/javascript/regexp_source.htm">source</a></td>
<td>The text of the pattern.</td>
</tr>
</table>
<p>In the following sections, we will have a few examples to demonstrate the usage of RegExp properties.</p>
<h2>RegExp Methods</h2>
<p>Here is a list of the methods associated with RegExp along with their description.</p>
<table class="table table-bordered">
<tr>
<th width="20%">Method</th>
<th width="80%">Description</th>
</tr>
<tr>
<td><a href="/javascript/regexp_exec.htm">exec()</a></td>
<td>Executes a search for a match in its string parameter.</td>
</tr>
<tr>
<td><a href="/javascript/regexp_test.htm">test()</a></td>
<td>Tests for a match in its string parameter.</td>
</tr>
<tr>
<td><a href="/javascript/regexp_tosource.htm">toSource()</a></td>
<td>Returns an object literal representing the specified object; you can use this value to create a new object.</td>
</tr>
<tr>
<td><a href="/javascript/regexp_tostring.htm">toString()</a></td>
<td>Returns a string representing the specified object. </td>
</tr>
</table>
<p>In the following sections, we will have a few examples to demonstrate the usage of RegExp methods.</p>
<h1>JavaScript - Document Object Model or DOM</h1>
<p>Every web page resides inside a browser window which can be considered as an object.</p>
<p>A Document object represents the HTML document that is displayed in that window. The Document object has various properties that refer to other objects which allow access to and modification of document content.</p>
<p>The way a document content is accessed and modified is called the <b>Document Object Model</b>, or <b>DOM</b>. The Objects are organized in a hierarchy. This hierarchical structure applies to the organization of objects in a Web document.</p>
<ul class="list">
<li><p><b>Window object</b> &minus; Top of the hierarchy. It is the outmost element of the object hierarchy.</p></li>
<li><p><b>Document object</b> &minus; Each HTML document that gets loaded into a window becomes a document object. The document contains the contents of the page.</p></li>
<li><p><b>Form object</b> &minus; Everything enclosed in the &lt;form&gt;...&lt;/form&gt; tags sets the form object.</p></li>
<li><p><b>Form control elements</b> &minus; The form object contains all the elements defined for that object such as text fields, buttons, radio buttons, and checkboxes.</p></li>
</ul>
<p>Here is a simple hierarchy of a few important objects &minus;</p>
<img src="https://www.tutorialspoint.com/javascript/images/html-dom.jpg" alt="HTML DOM" />
<p>There are several DOMs in existence. The following sections explain each of these DOMs in detail and describe how you can use them to access and modify document content.</p>
<ul class="list">
<li><p><a href="/javascript/javascript_legacy_dom.htm">The Legacy DOM</a> &minus; This is the model which was introduced in early versions of JavaScript language. It is well supported by all browsers, but allows access only to certain key portions of documents, such as forms, form elements, and images.</p></li>
<li><p><a href="/javascript/javascript_w3c_dom.htm">The W3C DOM</a> &minus; This document object model allows access and modification of all document content and is standardized by the World Wide Web Consortium (W3C). This model is supported by almost all the modern browsers.</p></li>
<li><p><a href="/javascript/javascript_ie4_dom.htm">The IE4 DOM</a> &minus; This document object model was introduced in Version 4 of Microsoft's Internet Explorer browser. IE 5 and later versions include support for most basic W3C DOM features.</p></li>
</ul>
<h2>DOM compatibility</h2>
<p>If you want to write a script with the flexibility to use either W3C DOM or IE 4 DOM depending on their availability, then you can use a capability-testing approach that first checks for the existence of a method or property to determine whether the browser has the capability you desire. For example &minus;</p> 
<pre class="prettyprint notranslate">
if (document.getElementById) {
   // If the W3C method exists, use it
}

else if (document.all) {
   // If the all[] array exists, use it
}

else {
   // Otherwise use the legacy DOM
}
</pre>
<h1>JavaScript - Errors &amp; Exceptions Handling</h1>
<p>There are three types of errors in programming: (a) Syntax Errors, (b) Runtime Errors, and (c) Logical Errors.</p>
<h2>Syntax Errors</h2>
<p>Syntax errors, also called <b>parsing errors,</b> occur at compile time in traditional programming languages and at interpret time in JavaScript.</p>
<p>For example, the following line causes a syntax error because it is missing a closing parenthesis.</p>
<pre class="prettyprint notranslate">
&lt;script type="text/javascript"&gt;
   &lt;!--
      window.print(;
   //--&gt;
&lt;/script&gt;
</pre>
<p>When a syntax error occurs in JavaScript, only the code contained within the same thread as the syntax error is affected and the rest of the code in other threads gets executed assuming nothing in them depends on the code containing the error.</p>
<h2>Runtime Errors</h2>
<p>Runtime errors, also called <b>exceptions,</b> occur during execution (after compilation/interpretation).</p>
<p>For example, the following line causes a runtime error because here the syntax is correct, but at runtime, it is trying to call a method that does not exist.</p>
<pre class="prettyprint notranslate">
&lt;script type="text/javascript"&gt;
   &lt;!--
      window.printme();
   //--&gt;
&lt;/script&gt;
</pre>
<p>Exceptions also affect the thread in which they occur, allowing other JavaScript threads to continue normal execution.</p>
<h2>Logical Errors</h2>
<p>Logic errors can be the most difficult type of errors to track down. These errors are not the result of a syntax or runtime error. Instead, they occur when you make a mistake in the logic that drives your script and you do not get the result you expected.</p>
<p>You cannot catch those errors, because it depends on your business requirement what type of logic you want to put in your program.</p>
<h2>The try...catch...finally Statement</h2>
<p>The latest versions of JavaScript added exception handling capabilities. JavaScript implements the <b>try...catch...finally</b> construct as well as the <b>throw</b> operator to handle exceptions.</p>
<p>You can <b>catch</b> programmer-generated and <b>runtime</b> exceptions, but you cannot <b>catch</b> JavaScript syntax errors.</p>
<p>Here is the <b>try...catch...finally</b> block syntax &minus;</p>
<pre class="prettyprint notranslate">
&lt;script type="text/javascript"&gt;
   &lt;!--
      try {
         // Code to run
         [break;]
      } 
      
      catch ( e ) {
         // Code to run if an exception occurs
         [break;]
      }
      
      [ finally {
         // Code that is always executed regardless of 
         // an exception occurring
      }]
   //--&gt;
&lt;/script&gt;
</pre>
<p>The <b>try</b> block must be followed by either exactly one <b>catch</b> block or one <b>finally</b> block (or one of both). When an exception occurs in the <b>try</b> block, the exception is placed in <b>e</b> and the <b>catch</b> block is executed. The optional <b>finally</b> block executes unconditionally after try/catch.</p>
<h3>Examples</h3>
<p>Here is an example where we are trying to call a non-existing function which in turn is raising an exception. Let us see how it behaves without <b>try...catch</b>&minus;</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   &lt;head&gt;
      
      &lt;script type="text/javascript"&gt;
         &lt;!--
            function myFunc()
            {
               var a = 100;
               alert("Value of variable a is : " + a );
            }
         //--&gt;
      &lt;/script&gt;
      
   &lt;/head&gt;
   
   &lt;body&gt;
      &lt;p&gt;Click the following to see the result:&lt;/p&gt;
      
      &lt;form&gt;
         &lt;input type="button" value="Click Me" onclick="myFunc();" /&gt;
      &lt;/form&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/error_handling.htm" height="90px" width="600px"></iframe>
<p>Now let us try to catch this exception using <b>try...catch</b> and display a user-friendly message. You can also suppress this message, if you want to hide this error from a user.</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   
   &lt;head&gt;
      
      &lt;script type="text/javascript"&gt;
         &lt;!--
            function myFunc()
            {
               var a = 100;
               try {
                  alert("Value of variable a is : " + a );
               } 
               
               catch ( e ) {
                  alert("Error: " + e.description );
               }
            }
         //--&gt;
      &lt;/script&gt;
      
   &lt;/head&gt;
   
   &lt;body&gt;
      &lt;p&gt;Click the following to see the result:&lt;/p&gt;
      
      &lt;form&gt;
         &lt;input type="button" value="Click Me" onclick="myFunc();" /&gt;
      &lt;/form&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/error_handling2.htm" height="90px" width="600px"></iframe>
<p>You can use <b>finally</b> block which will always execute unconditionally after the try/catch. Here is an example.</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   
   &lt;head&gt;
      
      &lt;script type="text/javascript"&gt;
         &lt;!--
            function myFunc()
            {
               var a = 100;
               
               try {
                  alert("Value of variable a is : " + a );
               }
               
               catch ( e ) {
                  alert("Error: " + e.description );
               }
               
               finally {
                  alert("Finally block will always execute!" );
               }
            }
         //--&gt;
      &lt;/script&gt;
      
   &lt;/head&gt;
   
   &lt;body&gt;
      &lt;p&gt;Click the following to see the result:&lt;/p&gt;
      
      &lt;form&gt;
         &lt;input type="button" value="Click Me" onclick="myFunc();" /&gt;
      &lt;/form&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/error_handling3.htm" height="90px" width="600px"></iframe>
<h2>The throw Statement</h2>
<p>You can use <b>throw</b> statement to raise your built-in exceptions or your customized exceptions. Later these exceptions can be captured and you can take an appropriate action.</p>
<h3>Example</h3>
<p>The following example demonstrates how to use a <b>throw</b> statement.</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   
   &lt;head&gt;
      
      &lt;script type="text/javascript"&gt;
         &lt;!--
            function myFunc()
            {
               var a = 100;
               var b = 0;
               
               try{
                  if ( b == 0 ){
                     throw( "Divide by zero error." ); 
                  }
                  
                  else
                  {
                     var c = a / b;
                  }
               }
               
               catch ( e ) {
                  alert("Error: " + e );
               }
            }
         //--&gt;
      &lt;/script&gt;
      
   &lt;/head&gt;
   
   &lt;body&gt;
      &lt;p&gt;Click the following to see the result:&lt;/p&gt;
      
      &lt;form&gt;
         &lt;input type="button" value="Click Me" onclick="myFunc();" /&gt;
      &lt;/form&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/throw_statement.htm" height="90px" width="600px"></iframe>
<p>You can raise an exception in one function using a string, integer, Boolean, or an object and then you can capture that exception either in the same function as we did above, or in another function using a <b>try...catch</b> block.</p>
<h2>The onerror() Method</h2>
<p>The <b>onerror</b> event handler was the first feature to facilitate error handling in JavaScript. The <b>error</b> event is fired on the window object whenever an exception occurs on the page.</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   
   &lt;head&gt;
      
      &lt;script type="text/javascript"&gt;
         &lt;!--
            window.onerror = function () {
               alert("An error occurred.");
            }
         //--&gt;
      &lt;/script&gt;
      
   &lt;/head&gt;
   
   &lt;body&gt;
      &lt;p&gt;Click the following to see the result:&lt;/p&gt;
      
      &lt;form&gt;
         &lt;input type="button" value="Click Me" onclick="myFunc();" /&gt;
      &lt;/form&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/onerror.htm" height="90px" width="600px"></iframe>
<p>The <b>onerror</b> event handler provides three pieces of information to identify the exact nature of the error &minus;</p>
<ul class="list">
<li><p><b>Error message</b> &minus; The same message that the browser would display for the given error</p></li>
<li><p><b>URL</b> &minus; The file in which the error occurred</p></li>
<li><p><b>Line number</b>&minus; The line number in the given URL that caused the error</p></li>
</ul>
<p>Here is the example to show how to extract this information.</p>
<h3>Example</h3>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   
   &lt;head&gt;
      
      &lt;script type="text/javascript"&gt;
         &lt;!--
            window.onerror = function (msg, url, line) {
               alert("Message : " + msg );
               alert("url : " + url );
               alert("Line number : " + line );
            }
         //--&gt;
      &lt;/script&gt;
      
   &lt;/head&gt;
   
   &lt;body&gt;
      &lt;p&gt;Click the following to see the result:&lt;/p&gt;
      
      &lt;form&gt;
         &lt;input type="button" value="Click Me" onclick="myFunc();" /&gt;
      &lt;/form&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/error_handling4.htm" height="90px" width="600px"></iframe>
<p>You can display extracted information in whatever way you think it is better.</p>
<p>You can use an <b>onerror</b> method, as shown below, to display an error message in case there is any problem in loading an image.</p>
<pre class="prettyprint notranslate">
&lt;img src="myimage.gif" onerror="alert('An error occurred loading the image.')" /&gt;
</pre>
<p>You can use <b>onerror</b> with many HTML tags to display appropriate messages in case of errors.</p>
<h1>JavaScript - Form Validation</h1>
<p>Form validation normally used to occur at the server, after the client had entered all the necessary data and then pressed the Submit button. If the data entered by a client was incorrect or was simply missing, the server would have to send all the data back to the client and request that the form be resubmitted with correct information. This was really a lengthy process which used to put a lot of burden on the server.</p>
<p>JavaScript provides a way to validate form's data on the client's computer before sending it to the web server. Form validation generally performs two functions.</p>
<ul class="list">
<li><p><b>Basic Validation</b> &minus; First of all, the form must be checked to make sure all the mandatory fields are filled in. It would require just a loop through each field in the form and check for data.</p></li>
<li><p><b>Data Format Validation</b> &minus; Secondly, the data that is entered must be checked for correct form and value. Your code must include appropriate logic to test correctness of data.</p></li>
</ul>
<h3>Example</h3>
<p>We will take an example to understand the process of validation. Here is a simple form in html format.</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   
   &lt;head&gt;
      &lt;title&gt;Form Validation&lt;/title&gt;
      
      &lt;script type="text/javascript"&gt;
         &lt;!--
            // Form validation code will come here.
         //--&gt;
      &lt;/script&gt;
      
   &lt;/head&gt;
   
   &lt;body&gt;
      &lt;form action="/cgi-bin/test.cgi" name="myForm" onsubmit="return(validate());"&gt;
         &lt;table cellspacing="2" cellpadding="2" border="1"&gt;
            
            &lt;tr&gt;
               &lt;td align="right"&gt;Name&lt;/td&gt;
               &lt;td&gt;&lt;input type="text" name="Name" /&gt;&lt;/td&gt;
            &lt;/tr&gt;
            
            &lt;tr&gt;
               &lt;td align="right"&gt;EMail&lt;/td&gt;
               &lt;td&gt;&lt;input type="text" name="EMail" /&gt;&lt;/td&gt;
            &lt;/tr&gt;
            
            &lt;tr&gt;
               &lt;td align="right"&gt;Zip Code&lt;/td&gt;
               &lt;td&gt;&lt;input type="text" name="Zip" /&gt;&lt;/td&gt;
            &lt;/tr&gt;
            
            &lt;tr&gt;
               &lt;td align="right"&gt;Country&lt;/td&gt;
               &lt;td&gt;
                  &lt;select name="Country"&gt;
                     &lt;option value="-1" selected&gt;[choose yours]&lt;/option&gt;
                     &lt;option value="1"&gt;USA&lt;/option&gt;
                     &lt;option value="2"&gt;UK&lt;/option&gt;
                     &lt;option value="3"&gt;INDIA&lt;/option&gt;
                  &lt;/select&gt;
               &lt;/td&gt;
            &lt;/tr&gt;
            
            &lt;tr&gt;
               &lt;td align="right"&gt;&lt;/td&gt;
               &lt;td&gt;&lt;input type="submit" value="Submit" /&gt;&lt;/td&gt;
            &lt;/tr&gt;
            
         &lt;/table&gt;
      &lt;/form&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/form_validations.htm" height="200px" width="600px"></iframe>
<h2>Basic Form Validation</h2>
<p>First let us see how to do a basic form validation. In the above form, we are calling <b>validate()</b> to validate data when <b>onsubmit</b> event is occurring. The following code shows the implementation of this validate() function.</p>
<pre class="prettyprint notranslate">
&lt;script type="text/javascript"&gt;
   &lt;!--
      // Form validation code will come here.
      function validate()
      {
      
         if( document.myForm.Name.value == "" )
         {
            alert( "Please provide your name!" );
            document.myForm.Name.focus() ;
            return false;
         }
         
         if( document.myForm.EMail.value == "" )
         {
            alert( "Please provide your Email!" );
            document.myForm.EMail.focus() ;
            return false;
         }
         
         if( document.myForm.Zip.value == "" ||
         isNaN( document.myForm.Zip.value ) ||
         document.myForm.Zip.value.length != 5 )
         {
            alert( "Please provide a zip in the format #####." );
            document.myForm.Zip.focus() ;
            return false;
         }
         
         if( document.myForm.Country.value == "-1" )
         {
            alert( "Please provide your country!" );
            return false;
         }
         return( true );
      }
   //--&gt;
&lt;/script&gt;
</pre>
<h2>Data Format Validation</h2>
<p>Now we will see how we can validate our entered form data before submitting it to the web server.</p>
<p>The following example shows how to validate an entered email address. An email address must contain at least a ‘@’ sign and a dot (.). Also, the ‘@’ must not be the first character of the email address, and the last dot must at least be one character after the ‘@’ sign.</p>
<h3>Example</h3>
<p>Try the following code for email validation.</p>
<pre class="prettyprint notranslate">
&lt;script type="text/javascript"&gt;
   &lt;!--
      function validateEmail()
      {
         var emailID = document.myForm.EMail.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos &lt; 1 || ( dotpos - atpos &lt; 2 )) 
         {
            alert("Please enter correct email ID")
            document.myForm.EMail.focus() ;
            return false;
         }
         return( true );
      }
   //--&gt;
&lt;/script&gt;
</pre>
<h1>JavaScript - Animation</h1>
<p>You can use JavaScript to create a complex animation having, but not limited to, the following elements &minus;</p>
<ul class="list">
<li>Fireworks</li>
<li>Fade Effect</li>
<li>Roll-in or Roll-out</li>
<li>Page-in or Page-out</li>
<li>Object movements</li>
</ul>
<p>You might be interested in existing JavaScript based animation library: <a target="_blank"  href="/script.aculo.us/scriptaculous_effects.htm">Script.Aculo.us</a>.</p>
<p>This tutorial provides a basic understanding of how to use JavaScript to create an animation.</p>
<p>JavaScript can be used to move a number of DOM elements (&lt;img /&gt;, &lt;div&gt; or any other HTML element) around the page according to some sort of pattern determined by a logical equation or function.</p>
<p>JavaScript provides the following two functions to be frequently used in animation programs.</p>
<ul class="list">
<li><p><b>setTimeout( function, duration)</b> &minus; This function calls <b>function</b> after <b>duration</b> milliseconds from now.</p></li>
<li><p><b>setInterval(function, duration)</b> &minus; This function calls <b>function</b> after every <b>duration</b> milliseconds.</p></li>
<li><p><b>clearTimeout(setTimeout_variable)</b> &minus; This function calls clears any timer set by the setTimeout() functions.</p></li>
</ul>
<p>JavaScript can also set a number of attributes of a DOM object including its position on the screen. You can set <i>top</i> and left attribute of an object to position it anywhere on the screen. Here is its syntax.</p>
<pre class="prettyprint notranslate">
// Set distance from left edge of the screen.
object.style.left = distance in pixels or points; 

or

// Set distance from top edge of the screen.
object.style.top = distance in pixels or points; 
</pre>
<h2>Manual Animation</h2>
<p>So let's implement one simple animation using DOM object properties and JavaScript functions as follows. The following list contains different DOM methods.</p>
<ul class="list">
<li><p>We are using the JavaScript function <b>getElementById()</b> to get a DOM object and then assigning it to a global variable <b>imgObj</b>.</p></li>
<li><p>We have defined an initialization function <b>init()</b> to initialize <b>imgObj</b> where we have set its <b>position</b> and <b>left</b> attributes.</p></li>
<li><p>We are calling initialization function at the time of window load.</p></li>
<li><p>Finally, we are calling <b>moveRight()</b> function to increase the left distance by 10 pixels. You could also set it to a negative value to move it to the left side.</p></li>
</ul>
<h3>Example</h3>
<p>Try the following example.</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   
   &lt;head&gt;
      &lt;title&gt;JavaScript Animation&lt;/title&gt;
      
      &lt;script type="text/javascript"&gt;
         &lt;!--
            var imgObj = null;
            
            function init(){
               imgObj = document.getElementById('myImage');
               imgObj.style.position= 'relative'; 
               imgObj.style.left = '0px'; 
            }
            
            function moveRight(){
               imgObj.style.left = parseInt(imgObj.style.left) + 10 + 'px';
            }
            
            window.onload =init;
         //--&gt;
      &lt;/script&gt;
      
   &lt;/head&gt;
   
   &lt;body&gt;
   
      &lt;form&gt;
         &lt;img id="myImage" src="/images/html.gif" /&gt;
         &lt;p&gt;Click button below to move the image to right&lt;/p&gt;
         &lt;input type="button" value="Click Me" onclick="moveRight();" /&gt;
      &lt;/form&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/animation.htm" height="250px" width="600px"></iframe>
<h2>Automated Animation</h2>
<p>In the above example, we saw how an image moves to right with every click. We can automate this process by using the JavaScript function <b>setTimeout()</b> as follows &minus;</p>
<p>Here we have added more methods. So let's see what is new here &minus;</p>
<ul class="list">
<li><p>The <b>moveRight()</b> function is calling <b>setTimeout()</b> function to set the position of <i>imgObj</i>.</p></li>
<li><p>We have added a new function <b>stop()</b> to clear the timer set by <b>setTimeout()</b> function and to set the object at its initial position.</p></li>
</ul>
<h3>Example</h3>
<p>Try the following example code.</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   
   &lt;head&gt;
      &lt;title&gt;JavaScript Animation&lt;/title&gt;
      
      &lt;script type="text/javascript"&gt;
         &lt;!--
            var imgObj = null;
            var animate ;
            
            function init(){
               imgObj = document.getElementById('myImage');
               imgObj.style.position= 'relative'; 
               imgObj.style.left = '0px'; 
            }
            
            function moveRight(){
               imgObj.style.left = parseInt(imgObj.style.left) + 10 + 'px';
               animate = setTimeout(moveRight,20); // call moveRight in 20msec
            }
            
            function stop(){
               clearTimeout(animate);
               imgObj.style.left = '0px'; 
            }
            
            window.onload =init;
         //--&gt;
      &lt;/script&gt;
      
   &lt;/head&gt;
   
   &lt;body&gt;
   
      &lt;form&gt;
         &lt;img id="myImage" src="/images/html.gif" /&gt;
         &lt;p&gt;Click the buttons below to handle animation&lt;/p&gt;
         &lt;input type="button" value="Start" onclick="moveRight();" /&gt;
         &lt;input type="button" value="Stop" onclick="stop();" /&gt;
      &lt;/form&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/animation2.htm" height="250px" width="600px"></iframe>
<h2>Rollover with a Mouse Event</h2>
<p>Here is a simple example showing image rollover with a mouse event.</p>
<p>Let's see what we are using in the following example &minus;</p>
<ul class="list">
<li><p>At the time of loading this page, the ‘if’ statement checks for the existence of the image object. If the image object is unavailable, this block will not be executed.</p></li>
<li><p>The <b>Image()</b> constructor creates and preloads a new image object called <b>image1</b>.</p></li>
<li><p>The src property is assigned the name of the external image file called /images/html.gif.</p></li>
<li><p>Similarly, we have created <b>image2</b> object and assigned /images/http.gif in this object.</p></li>
<li><p>The # (hash mark) disables the link so that the browser does not try to go to a URL when clicked. This link is an image.</p></li>
<li><p>The <b>onMouseOver</b> event handler is triggered when the user's mouse moves onto the link, and the <b>onMouseOut</b> event handler is triggered when the user's mouse moves away from the link (image).</p></li>
<li><p>When the mouse moves over the image, the HTTP image changes from the first image to the second one. When the mouse is moved away from the image, the original image is displayed.</p></li>
<li><p>When the mouse is moved away from the link, the initial image html.gif will reappear on the screen.</p></li>
</ul>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   
   &lt;head&gt;
      &lt;title&gt;Rollover with a Mouse Events&lt;/title&gt;
      
      &lt;script type="text/javascript"&gt;
         &lt;!--
            if(document.images){
               var image1 = new Image(); // Preload an image
               image1.src = "/images/html.gif";
               var image2 = new Image(); // Preload second image
               image2.src = "/images/http.gif";
            }
         //--&gt;
      &lt;/script&gt;
      
   &lt;/head&gt;
   
   &lt;body&gt;
      &lt;p&gt;Move your mouse over the image to see the result&lt;/p&gt;
      
      &lt;a href="#" onMouseOver="document.myImage.src=image2.src;" onMouseOut="document.myImage.src=image1.src;"&gt;
      &lt;img name="myImage" src="/images/html.gif" /&gt;
      &lt;/a&gt;
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/animation3.htm" height="250px" width="600px"></iframe>
<h1>JavaScript - Multimedia</h1>
<p>The JavaScript <b>navigator</b> object includes a child object called <b>plugins</b>. This object is an array, with one entry for each plug-in installed on the browser. The navigator.plugins object is supported only by Netscape, Firefox, and Mozilla only.</p>
<h3>Example</h3>
<p>Here is an example that shows how to list down all the plug-on installed in your browser &minus;</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   
   &lt;head&gt;
      &lt;title&gt;List of Plug-Ins&lt;/title&gt;
   &lt;/head&gt;
   
   &lt;body&gt;
      &lt;table border="1"&gt;
         &lt;tr&gt;
            &lt;th&gt;Plug-in Name&lt;/th&gt;
            &lt;th&gt;Filename&lt;/th&gt;
            &lt;th&gt;Description&lt;/th&gt;
         &lt;/tr&gt;
         
         &lt;script language="JavaScript" type="text/javascript"&gt;
            for (i=0; i&lt;navigator.plugins.length; i++) {
               document.write("&lt;tr&gt;&lt;td&gt;");
               document.write(navigator.plugins[i].name);
               document.write("&lt;/td&gt;&lt;td&gt;");
               document.write(navigator.plugins[i].filename);
               document.write("&lt;/td&gt;&lt;td&gt;");
               document.write(navigator.plugins[i].description);
               document.write("&lt;/td&gt;&lt;/tr&gt;");
            }
         &lt;/script&gt;
         
      &lt;/table&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/multimedia.htm" height="410px" width="600px"></iframe>
<h2>Checking for Plug-Ins</h2>
<p>Each plug-in has an entry in the array. Each entry has the following properties &minus;</p>
<ul class="list">
<li><p><b>name</b> &minus; is the name of the plug-in.</p></li>
<li><p><b>filename</b> &minus; is the executable file that was loaded to install the plug-in.</p></li>
<li><p><b>description</b> &minus; is a description of the plug-in, supplied by the developer.</p></li>
<li><p><b>mimeTypes</b> &minus; is an array with one entry for each MIME type supported by the plug-in.</p></li>
</ul>
<p>You can use these properties in a script to find out the installed plug-ins, and then using JavaScript, you can play appropriate multimedia file. Take a look at the following example.</p>
<pre class="prettyprint notranslate">
&lt;html&gt;
   
   &lt;head&gt;
      &lt;title&gt;Using Plug-Ins&lt;/title&gt;
   &lt;/head&gt;
   
   &lt;body&gt;
   
      &lt;script language="JavaScript" type="text/javascript"&gt;
         media = navigator.mimeTypes["video/quicktime"];
         
         if (media){
            document.write("&lt;embed src='quick.mov' height=100 width=100&gt;");
         }
         else
         {
            document.write("&lt;img src='quick.gif' height=100 width=100&gt;");
         }
      &lt;/script&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/multimedia2.htm" height="120px" width="600px"></iframe>
<p><b>NOTE</b> &minus; Here we are using HTML &lt;embed&gt; tag to embed a multimedia file.</p>
<h2>Controlling Multimedia</h2>
<p>Let us take one real example which works in almost all the browsers &minus;</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   
   &lt;head&gt;
      &lt;title&gt;Using Embeded Object&lt;/title&gt;
      
      &lt;script type="text/javascript"&gt;
         &lt;!--
            function play()
            {
               if (!document.demo.IsPlaying()){
                  document.demo.Play();
               }
            }
            function stop()
            {
               if (document.demo.IsPlaying()){
                  document.demo.StopPlay();
               }
            }
            function rewind()
            {
               if (document.demo.IsPlaying()){
                  document.demo.StopPlay();
               }
               document.demo.Rewind();
            }
         //--&gt;
      &lt;/script&gt;
      
   &lt;/head&gt;
   
   &lt;body&gt;
      
      &lt;embed id="demo" name="demo"
      src="http://www.amrood.com/games/kumite.swf"
      width="318" height="300" play="false" loop="false"
      pluginspage="http://www.macromedia.com/go/getflashplayer"
      swliveconnect="true"&gt;
      &lt;/embed&gt;
      
      &lt;form name="form" id="form" action="#" method="get"&gt;
         &lt;input type="button" value="Start" onclick="play();" /&gt;
         &lt;input type="button" value="Stop" onclick="stop();" /&gt;
         &lt;input type="button" value="Rewind" onclick="rewind();" /&gt;
      &lt;/form&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<p>If you are using Mozilla, Firefox or Netscape, then</p>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/multimedia3.htm" height="350px" width="600px"></iframe>
<h1>JavaScript - Debugging</h1>
<p>Every now and then, developers commit mistakes while coding. A mistake in a program or a script is referred to as a <b>bug</b>.</p>
<p>The process of finding and fixing bugs is called <b>debugging</b> and is a normal part of the development process. This section covers tools and techniques that can help you with debugging tasks..</p>
<h2>Error Messages in IE</h2>
<p>The most basic way to track down errors is by turning on error information in your browser. By default, Internet Explorer shows an error icon in the status bar when an error occurs on the page.</p>
<img src="https://www.tutorialspoint.com/javascript/images/error_icon.gif" alt="Error Icon" />
<p>Double-clicking this icon takes you to a dialog box showing information about the specific error that occurred.</p>
<p>Since this icon is easy to overlook, Internet Explorer gives you the option to automatically show the Error dialog box whenever an error occurs.</p>
<p>To enable this option, select <b>Tools &rarr; Internet Options &rarr; Advanced tab.</b> and then finally check the <b>"Display a Notification About Every Script Error"</b> box option as shown below &minus;</p>
<img src="https://www.tutorialspoint.com/javascript/images/internet_options.gif" alt="Internet Options" />
<h2>Error Messages in Firefox or Mozilla</h2>
<p>Other browsers like Firefox, Netscape, and Mozilla send error messages to a special window called the <b>JavaScript Console</b> or <b>Error Consol</b>. To view the console, select <b>Tools &rarr; Error Consol or Web Development</b>.</p>
<p>Unfortunately, since these browsers give no visual indication when an error occurs, you must keep the Console open and watch for errors as your script executes.</p> 
<img src="https://www.tutorialspoint.com/javascript/images/error_console.gif" alt="Error Console" />
<h2>Error Notifications</h2>
<p>Error notifications that show up on Console or through Internet Explorer dialog boxes are the result of both syntax and runtime errors. These error notification include the line number at which the error occurred.</p>
<p>If you are using Firefox, then you can click on the error available in the error console to go to the exact line in the script having error.</p>
<h2>How to debug a Script</h2>
<p>There are various ways to debug your JavaScript &minus;</p>
<h3>Use a JavaScript Validator</h3>
<p>One way to check your JavaScript code for strange bugs is to run it through a program that checks it to make sure it is valid and that it follows the official syntax rules of the language. These programs are called <b>validating parsers</b> or just <b>validators</b> for short, and often come with commercial HTML and JavaScript editors.</p>
<p>The most convenient validator for JavaScript is Douglas Crockford's JavaScript Lint, which is available for free at <a rel="nofollow" href="http://www.jslint.com/" target="_blank">Douglas Crockford's JavaScript Lint</a>.</p>
<p>Simply visit that web page, paste your JavaScript (Only JavaScript) code into the text area provided, and click the jslint button. This program will parse through your JavaScript code, ensuring that all the variable and function definitions follow the correct syntax. It will also check JavaScript statements, such as if and <b>while,</b> to ensure they too follow the correct format</p>
<h3>Add Debugging Code to Your Programs</h3>
<p>You can use the <b>alert()</b> or <b>document.write()</b> methods in your program to debug your code. For example, you might write something as follows &minus;</p>
<pre class="prettyprint notranslate">
var debugging = true;
var whichImage = "widget";

if( debugging )
alert( "Calls swapImage() with argument: " + whichImage );
var swapStatus = swapImage( whichImage );

if( debugging )
   alert( "Exits swapImage() with swapStatus=" + swapStatus );
</pre>
<p>By examining the content and order of the <b>alert()</b> as they appear, you can examine the health of your program very easily.</p>
<h3>Use a JavaScript Debugger</h3>
<p>A debugger is an application that places all aspects of script execution under the control of the programmer. Debuggers provide fine-grained control over the state of the script through an interface that allows you to examine and set values as well as control the flow of execution.</p>
<p>Once a script has been loaded into a debugger, it can be run one line at a time or instructed to halt at certain breakpoints. Once execution is halted, the programmer can examine the state of the script and its variables in order to determine if something is amiss. You can also watch variables for changes in their values.</p>
<p>The latest version of the Mozilla JavaScript Debugger (code-named Venkman) for both Mozilla and Netscape browsers can be downloaded at <a href="http://www.hacksrus.com/~ginda/venkman" target="_blank">http://www.hacksrus.com/~ginda/venkman</a></p>
<h2>Useful tips for developers</h2>
<p>You can keep the following tips in mind to reduce the number of errors in your scripts and simplify the debugging process &minus;</p>
<ul class="list">
<li><p>Use plenty of <b>comments</b>. Comments enable you to explain why you wrote the script the way you did and to explain particularly difficult sections of code.</p></li>
<li><p>Always use <b>indentation</b> to make your code easy to read. Indenting statements also makes it easier for you to match up beginning and ending tags, curly braces, and other HTML and script elements.</p></li>
<li><p>Write <b>modular code</b>. Whenever possible, group your statements into functions. Functions let you group related statements, and test and reuse portions of code with minimal effort.</p></li>
<li><p>Be consistent in the way you name your variables and functions. Try using names that are long enough to be meaningful and that describe the contents of the variable or the purpose of the function.</p></li>
<li><p>Use consistent syntax when naming variables and functions. In other words, keep them all lowercase or all uppercase; if you prefer Camel-Back notation, use it consistently.</p></li>
<li><p><b>Test long scripts</b> in a modular fashion. In other words, do not try to write the entire script before testing any portion of it. Write a piece and get it to work before adding the next portion of code.</p></li>
<li><p>Use <b>descriptive variable and function names</b> and avoid using single-character names.</p></li>
<li><p><b>Watch your quotation marks</b>. Remember that quotation marks are used in pairs around strings and that both quotation marks must be of the same style (either single or double).</p></li>
<li><p><b>Watch your equal signs</b>. You should not used a single = for comparison purpose.</p></li>
<li><p>Declare <b>variables explicitly</b> using the <b>var</b> keyword.</p></li>
</ul>
<h1>JavaScript - Image Map</h1>
<p>You can use JavaScript to create client-side image map. Client-side image maps are enabled by the <b>usemap</b> attribute for the &lt;img /&gt; tag and defined by special &lt;map&gt; and &lt;area&gt; extension tags.</p>
<p>The image that is going to form the map is inserted into the page using the &lt;img /&gt; element as normal, except that it carries an extra attribute called <b>usemap</b>. The value of the usemap attribute is the value of the name attribute on the &lt;map&gt; element, which you are about to meet, preceded by a pound or hash sign.</p>
<p>The &lt;map&gt; element actually creates the map for the image and usually follows directly after the &lt;img /&gt; element. It acts as a container for the &lt;area /&gt; elements that actually define the clickable hotspots. The &lt;map&gt; element carries only one attribute, the <b>name</b> attribute, which is the name that identifies the map. This is how the &lt;img /&gt; element knows which &lt;map&gt; element to use.</p>
<p>The &lt;area&gt; element specifies the shape and the coordinates that define the boundaries of each clickable hotspot.</p>
<p>The following code combines imagemaps and JavaScript to produce a message in a text box when the mouse is moved over different parts of an image.</p>
<pre class="prettyprint notranslate">
&lt;html&gt;
   
   &lt;head&gt;
      &lt;title&gt;Using JavaScript Image Map&lt;/title&gt;
      
      &lt;script type="text/javascript"&gt;
         &lt;!--
            function showTutorial(name){
               document.myform.stage.value = name
            }
         //--&gt;
      &lt;/script&gt;
      
   &lt;/head&gt;
   
   &lt;body&gt;
      &lt;form name="myform"&gt;
         &lt;input type="text" name="stage" size="20" /&gt;
      &lt;/form&gt;
      
      &lt;!-- Create  Mappings --&gt;
      &lt;img src="/images/usemap.gif" alt="HTML Map" border="0" usemap="#tutorials"/&gt;
      
      &lt;map name="tutorials"&gt;
         &lt;area shape="poly" 
            coords="74,0,113,29,98,72,52,72,38,27"
            href="/perl/index.htm" alt="Perl Tutorial"
            target="_self" 
            onMouseOver="showTutorial('perl')" 
            onMouseOut="showTutorial('')"/&gt;
         
         &lt;area shape="rect" 
            coords="22,83,126,125"
            href="/html/index.htm" alt="HTML Tutorial" 
            target="_self" 
            onMouseOver="showTutorial('html')" 
            onMouseOut="showTutorial('')"/&gt;
         
         &lt;area shape="circle" 
            coords="73,168,32"
            href="/php/index.htm" alt="PHP Tutorial"
            target="_self" 
            onMouseOver="showTutorial('php')" 
            onMouseOut="showTutorial('')"/&gt;
      &lt;/map&gt;
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<p>You can feel the map concept by placing the mouse cursor on the image object.</p>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/image_map.htm" height="300px" width="600px"></iframe>
<h1>JavaScript - Browsers Compatibility</h1>
<p>It is important to understand the differences between different browsers in order to handle each in the way it is expected. So it is important to know which browser your web page is running in.</p>
<p>To get information about the browser your webpage is currently running in, use the built-in <b>navigator</b> object.</p>
<h2>Navigator Properties</h2>
<p>There are several Navigator related properties that you can use in your Web page. The following is a list of the names and descriptions of each.</p>
<table class="table table-bordered">
<tr>
<th>Sr.No</th>
<th>Property &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><p><b>appCodeName</b></p>
<p>This property is a string that contains the code name of the browser, Netscape for Netscape and Microsoft Internet Explorer for Internet Explorer.</p></td>
</tr>
<tr>
<td>2</td>
<td><p><b>appVersion</b></p>
<p>This property is a string that contains the version of the browser as well as other useful information such as its language and compatibility.</p></td>
</tr>
<tr>
<td>3</td>
<td><p><b>language</b></p>
<p>This property contains the two-letter abbreviation for the language that is used by the browser. Netscape only.</p></td>
</tr>
<tr>
<td>4</td>
<td><p><b>mimTypes[]</b></p>
<p>This property is an array that contains all MIME types supported by the client. Netscape only.</p></td>
</tr>
<tr>
<td>5</td>
<td><p><b>platform[]</b></p>
<p>This property is a string that contains the platform for which the browser was compiled."Win32" for 32-bit Windows operating systems</p></td>
</tr>
<tr>
<td>6</td>
<td><p><b>plugins[]</b></p>
<p>This property is an array containing all the plug-ins that have been installed on the client. Netscape only.</p></td>
</tr>
<tr>
<td>7</td>
<td><p><b>userAgent[]</b></p>
<p>This property is a string that contains the code name and version of the browser. This value is sent to the originating server to identify the client.</p></td>
</tr>
</table>
<h2>Navigator Methods</h2>
<p>There are several Navigator-specific methods. Here is a list of their names and descriptions.</p>
<table class="table table-bordered">
<tr>
<th width="10%">Sr.No</th>
<th>Description</th>
</tr>
<tr>
<td>1</td>
<td><p><b>javaEnabled()</b></p>
<p>This method determines if JavaScript is enabled in the client. If JavaScript is enabled, this method returns true; otherwise, it returns false.</p></td>
</tr>
<tr>
<td>2</td>
<td><p><b>plugings.refresh</b></p>
<p>This method makes newly installed plug-ins available and populates the plugins array with all new plug-in names. Netscape only.</p></td>
</tr>
<tr>
<td>3</td>
<td><p><b>preference(name,value)</b></p>
<p>This method allows a signed script to get and set some Netscape preferences. If the second parameter is omitted, this method will return the value of the specified preference; otherwise, it sets the value. Netscape only.</p></td>
</tr>
<tr>
<td>4</td>
<td><p><b>taintEnabled()</b></p>
<p>This method returns true if data tainting is enabled; false otherwise.</p></td>
</tr>
</table>
<h2>Browser Detection</h2>
<p>There is a simple JavaScript which can be used to find out the name of a browser and then accordingly an HTML page can be served to the user.</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   
   &lt;head&gt;
      &lt;title&gt;Browser Detection Example&lt;/title&gt;
   &lt;/head&gt;
   
   &lt;body&gt;
      
      &lt;script type="text/javascript"&gt;
         &lt;!--
            var userAgent   = navigator.userAgent;
            var opera       = (userAgent.indexOf('Opera') != -1);
            var ie          = (userAgent.indexOf('MSIE') != -1);
            var gecko       = (userAgent.indexOf('Gecko') != -1);
            var netscape    = (userAgent.indexOf('Mozilla') != -1);
            var version     = navigator.appVersion;
            
            if (opera){
               document.write("Opera based browser");
               // Keep your opera specific URL here.
            }
            
            else if (gecko){
               document.write("Mozilla based browser");
               // Keep your gecko specific URL here.
            }
            
            else if (ie){
               document.write("IE based browser");
               // Keep your IE specific URL here.
            }
            
            else if (netscape){
               document.write("Netscape based browser");
               // Keep your Netscape specific URL here.
            }
            
            else{
               document.write("Unknown browser");
            }
            // You can include version to along with any above condition.
            document.write("&lt;br /&gt; Browser version info : " + version );
         //--&gt;
      &lt;/script&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Output</h3>
<iframe onload="resizeFrame(this)" class="result" src="/javascript/src/browsers_handling.htm" height="90px" width="600px"></iframe>
<hr />
<div class="pre-btn">
<a href="/javascript/javascript_browsers_handling.htm"><i class="icon icon-arrow-circle-o-left big-font"></i> Previous Page</a>
</div>
<div class="print-btn center">
<a href="/cgi-bin/printpage.cgi" target="_blank"><i class="icon icon-print big-font"></i> Print</a>
</div>
<div class="pdf-btn">
<a href="/javascript/pdf/javascript_quick_guide.pdf" title="JavaScript Quick Guide" target="_blank"><i class="icon icon-file-pdf-o big-font"></i> PDF</a>
</div>
<div class="nxt-btn">
<a href="/javascript/javascript_builtin_functions.htm">Next Page <i class="icon icon-arrow-circle-o-right big-font"></i>&nbsp;</a>
</div>
<hr />
<!-- PRINTING ENDS HERE -->
<div class="bottomgooglead">
<div class="bottomadtag">Advertisements</div>
<script type="text/javascript"><!--
var width = 580;
var height = 400;
var format = "580x400_as";
if( window.innerWidth < 468 ){
   width = 300;
   height = 250;
   format = "300x250_as";
}
google_ad_client = "pub-7133395778201029";
google_ad_width = width;
google_ad_height = height;
google_ad_format = format;
google_ad_type = "image";
google_ad_channel ="";
//--></script>
<script type="text/javascript"
src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
</div>
</div>
<div class="row">
<div class="col-md-3" id="rightbar">
<div class="simple-ad">
<a href="javascript:void(0)" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('https://www.facebook.com/sharer.php?u=' + 'http://www.tutorialspoint.com/javascript/javascript_quick_guide.htm','sharer','toolbar=0,status=0,width=626,height=456,top='+sTop+',left='+sLeft);return false;">
<img src="/images/facebookIcon.jpg" alt="img" />
</a>
<a  href="javascript:void(0)" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('https://twitter.com/share?url=' + 'http://www.tutorialspoint.com/javascript/javascript_quick_guide.htm','sharer','toolbar=0,status=0,width=626,height=456,top='+sTop+',left='+sLeft);return false;">
<img src="/images/twitterIcon.jpg" alt="img" />
</a>
<a  href="javascript:void(0)" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('https://www.linkedin.com/cws/share?url=' + 'http://www.tutorialspoint.com/javascript/javascript_quick_guide.htm&amp;title='+ document.title,'sharer','toolbar=0,status=0,width=626,height=456,top='+sTop+',left='+sLeft);return false;">
<img src="/images/linkedinIcon.jpg" alt="img" />
</a>
<a  href="javascript:void(0)" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('https://plus.google.com/share?url=http://www.tutorialspoint.com/javascript/javascript_quick_guide.htm','sharer','toolbar=0,status=0,width=626,height=456,top='+sTop+',left='+sLeft);return false;">
<img src="/images/googlePlusIcon.jpg" alt="img" />
</a>
<a  href="javascript:void(0)" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('https://www.stumbleupon.com/submit?url=http://www.tutorialspoint.com/javascript/javascript_quick_guide.htm&amp;title='+ document.title,'sharer','toolbar=0,status=0,width=626,height=456,top='+sTop+',left='+sLeft);return false;">
<img src="/images/StumbleUponIcon.jpg" alt="img" />
</a>
<a  href="javascript:void(0)" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('https://reddit.com/submit?url=http://www.tutorialspoint.com/javascript/javascript_quick_guide.htm&amp;title='+ document.title,'sharer','toolbar=0,status=0,width=626,height=656,top='+sTop+',left='+sLeft);return false;">
<img src="/images/reddit.jpg" alt="img" />
</a>
</div>
<div class="rightgooglead">
<script type="text/javascript"><!--
google_ad_client = "pub-7133395778201029";
google_ad_width = 300;
google_ad_height = 250;
google_ad_format = "300x250_as";
google_ad_type = "image";
google_ad_channel ="";
//--></script>
<script type="text/javascript"
src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
<div class="rightgooglead">
<script type="text/javascript"><!--
google_ad_client = "pub-7133395778201029";
google_ad_width = 300;
google_ad_height = 600;
google_ad_format = "300x600_as";
google_ad_type = "image";
google_ad_channel ="";
//--></script>
<script type="text/javascript"
src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
<div class="rightgooglead">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-2537027957187252";
/* Right Side Ad */
google_ad_slot = "right_side_ad";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="footer-copyright">
<div class="container">
<div class="row">
<div class="col-md-1">
<a href="index.htm" class="logo"> <img alt="Tutorials Point" class="img-responsive" src="/scripts/img/logo-footer.png"> </a>
</div>
<div class="col-md-4 col-sm-12 col-xs-12">
   <nav id="sub-menu">
      <ul>
         <li><a href="/about/tutorials_writing.htm">Write for us</a></li>
         <li><a href="/about/faq.htm">FAQ's</a></li>
         <li><a href="/about/about_helping.htm">Helping</a></li>
         <li><a href="/about/contact_us.htm">Contact</a></li>
      </ul>
   </nav>
</div>
<div class="col-md-3 col-sm-12 col-xs-12">
<p>&copy; Copyright 2017. All Rights Reserved.</p>
</div>
<div class="col-md-4 col-sm-12 col-xs-12">
   <div class="news-group">
      <input type="text" class="form-control-foot search" name="textemail" id="textemail" autocomplete="off" placeholder="Enter email for newsletter" onfocus="if (this.value == 'Enter email for newsletter...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Enter email for newsletter...';}">
      <span class="input-group-btn"> <button class="btn btn-default btn-footer" id="btnemail" type="submit" onclick="javascript:void(0);">go</button> </span>
      <div id="newsresponse"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
<!-- Libs -->
<script type="text/javascript" src="/theme/js/custom-min.js?v=4"></script>
<script src="https://www.google-analytics.com/urchin.js">
</script>
<script type="text/javascript">
_uacct = "UA-232293-6";
urchinTracker();
$('.pg-icon').click(function(){
   $('.wrapLoader').show();
});
</script>
<script type="text/javascript" src="/theme/js/jquery.colorbox-min.js"></script>
<script type="text/javascript">
   var tryit = new $.TryIt('javascript/try_javascript.php');
   tryit.compile();
</script></div>
</body>
</html>
