CZ4032 Data Mining and Analysis Assignment

Group 04
Yong Guo Jun U1440217C
Huang Jian Wei U1521567A
Hsin Jia Jing U1521040E
Chong Ning Hui Cherrie U1521041B
Shannon Neo Si Lin U1521712L

Preprocessing

Step 1: In Preprocess Folder, there is a preprocess.php file
Step 2: Run the preprocess.php in a PHP Development enrivoment. XAMPP/WAMP is recommended
Step 3: Place the preprocess.php in htdocs folder after XAMPP is installed and go to localhost:xxxx(xxxx will be your port number)
	to run the php script.
Step 4: Result will output to responsesP.csv

Requirement: responses.csv as original dataset.

Using Weka

Step 1: Download and install Weka Explorer from https://www.cs.waikato.ac.nz/ml/weka/downloading.html
Step 2: After setting up Weka, open Weka GUI and launch Explorer.
Step 3: Under "Preprocess" Tab, open file and load responses.csv or responsesP.csv.(Remember to choose file type .csv)
Step 4: To begin classifying, go to "Classify" tab and choose the classifier you want e.g Naive Bayes, J48
Step 5: Choose the class labels,test options and click start. Result will be produced.

To rank attributes

Step 1 : Choose AttributeSelectedClassifier(under meta) in the classifier options.
Step 2 : Configure the attributeSelectedClassifier(e.g Classifier - J48, evaluator - GainRatioAttributeEval, search- Ranker)
