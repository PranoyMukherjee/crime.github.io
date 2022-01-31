#!C:\Users\Lenovo\AppData\Local\Programs\Python\Python37-32\python.exe

import numpy as np
import pandas as pd
import seaborn as sns
import matplotlib.pyplot as plt
from sklearn.linear_model import LogisticRegression
from sklearn.model_selection import train_test_split
import warnings
import pickle
warnings.filterwarnings("ignore")
sns.set()
df = pd.read_csv("crimePredfinal.csv")

df.head()

df.describe()

df.info()

sns.set(rc = {'figure.figsize':(12,10)})
sns.set_context("talk", font_scale=0.5)

sns.heatmap(df.corr(), cmap='Reds', annot=True)

import sklearn
from sklearn import preprocessing, neighbors
from sklearn.model_selection import train_test_split

obj_df = df.select_dtypes(include=['object']).copy()
print(obj_df.head())

lb_make = preprocessing.LabelEncoder()
for col in obj_df.columns.values:
    df[f"{col}_new"] = lb_make.fit_transform(df[f"{col}"])
    
df.head()

df.drop(['CRIME'], 1, inplace=True)
df.drop(['TYPE_OF_CRIME'], 1, inplace=True)
df.drop(['DATE'], 1, inplace=True)
df.drop(['TIMING'], 1, inplace=True)
df.drop(['PLACE_KOLKATA'], 1, inplace=True)
df.head()


X = df.drop("target", axis=1)
X = preprocessing.scale(X)
y = df['target']

X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.3)

clf = neighbors.KNeighborsClassifier()
clf.fit(X_train, y_train)

accuracy = clf.score(X_train, y_train)
print("Accuracy", accuracy)


for X,y in zip(X_test, y_test):
    	print(f"Predicted Target:{clf.predict([X])[0]}, Actual Target: {y}")

# Bonus: SVM for classification
from sklearn import svm
clf2 = svm.SVC(kernel="linear")
clf2.fit(X_train, y_train)
confidence2 = clf2.score(X_train, y_train)
print("Accuracy:", confidence2)

for X,y in zip(X_test, y_test):
	print(f"Model:{clf2.predict([X])[0]}, Actual: {y}")
 
inputt=[int(x) for x in "45 32 60".split(' ')]
final=[np.array(inputt)]
b = clf2.predict_proba(final)


pickle.dump(clf2,open('model.pkl','wb'))
model=pickle.load(open('model.pkl','rb'))


