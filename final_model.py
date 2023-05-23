import pandas as pd
import streamlit as st
import matplotlib.pyplot as plt
import numpy as np
import seaborn as sns
import plotly.express as px
import csv
import altair as alt
import plost
st.set_page_config(layout='wide', initial_sidebar_state='expanded')
with open('style.css') as f:
    st.markdown(f'<style>{f.read()}</style>', unsafe_allow_html=True)

df = pd.read_csv("TNP_20-21.csv")
bf = pd.read_csv("TNP_22-23.csv")
nf = pd.read_csv("TNP_21-22.csv")
jf = pd.read_csv("TNP20-21Final.csv")
ef = pd.read_csv("Dept_of_Computer_Expert_Talk 21-22-sem_1.csv")
ef1 = pd.read_csv("Dept_of_Computer_Expert_Talk 21-22-sem_2.csv")



data = st.sidebar.selectbox('Select by', ('Placement', 'Expert Talk')) 

if data=='Placement':
    # Row A
    st.markdown('### Metrics')
    
    
    year = st.sidebar.selectbox("Select Year", ['2020-21', '2021-22', '2022-23','All Academic Year Analysis'])
    
    if year == '2020-21':

        PL  = pd.read_csv("TNP_PL_UPL.csv")

        val2=int(PL['SrNo'].count())
        val1=150-int(val2)
        val3=int(df['SrNo'].count())
        col1, col2, col3,col4 = st.columns(4)
        col1.metric("Placed Students", val1)
        col2.metric("Unplaced Students", val2)
        col3.metric("TOTAL", "150")
        col4.metric("Companies", val3)
        Y = st.selectbox('', ['Package', 'Count'])
        c1, c2 = st.columns((5,5))
        with c1:       
              
            st.markdown('### Company With {temp}'.format(temp=str(Y)))
        
            st.bar_chart(data=df, x='NameofCompany', y=Y, width=0, height=0, use_container_width=True)
            btn1=st.button("Show Analysis")
            if btn1:
                st.write("The bar graph shows the packages which offered by different companies and shows the count of hired student by each company.")
        

        with c2:
            st.markdown('### Company With {temp}'.format(temp=str(Y)))      
        
            fig = px.pie(df, values=Y, names='NameofCompany',                   
                    height=300, width=200)
            fig.update_layout(margin=dict(l=30, r=20, t=40, b=0),)
            st.plotly_chart(fig, use_container_width=True)
            btn2=st.button("Analysis")
            if btn2:
                st.write("The pie chart shows the percentage of students who were hired by each company comapare to total no of student and shows the different packages that were offered")
               

        # Slider
        company = df['NameofCompany'].unique().tolist()
        package = df['Package'].unique().tolist()
        
        package_selection = st.slider('Select Range Of Package', min_value=min(package),max_value=max(package),value=(min(package), max(package)))

        mask = (df['Package'].between(*package_selection))
        n = df[mask].shape[0]      

        sh = df[mask]

        barChart = px.bar(sh, x='NameofCompany', y='Count', text="Package",
                        color_discrete_sequence = ['#F63366'],
                        template= 'plotly_white')
        st.plotly_chart(barChart)
        btn3=st.button("Show analysis")
        if btn3:
            st.write("The bar graph shows the number of employees hired by company name by choosing range of packages offered.")

        

        #top 3 companies
        max1=0
        max2=0
        max3=0
        str1=""
        str2=""
        str3=""
        st.markdown("### Top 3 Companies this year")
        with open("TNP_20-21.csv") as cards:
            csv_reader = csv.reader(cards)
            for index,col in enumerate(csv_reader):
                if(index!=0):
                    if(max1<int(col[3])):
                        max3=max2
                        max2=max1
                        max1=int(col[3])
                        str3=str2
                        str2=str1
                        str1=str(col[1])
                    
                    if(max2<int(col[3]) and max1!=int(col[3])):
                        max3=max2
                        max2=int(col[3])
                        str3=str2
                        str2=str(col[1])
                    
                    if(max3<int(col[3]) and max2!=int(col[3]) and max1!=int(col[3])):
                        max3=int(col[3])
                        str3=str(col[1])
                



        data={"name":[str1,str2,str3],"count":[max1,max2,max3]}
        data=pd.DataFrame(data)
        data=data.set_index("name")
        st.bar_chart(data)
        btn4=st.button("show analysis")
        if btn4:
            st.write("bar graph that shows the company name and the highest 3 count of hired students.")

    elif year == '2021-22' :
        val3=int(nf['SrNo'].count())
        with open('TNP21-22Final.csv') as cards:
            csv_reader = csv.reader(cards)
            for index, col in enumerate(csv_reader):
                if index == 2:                
                    total = int(col[2])
                if index == 3:
                    pl = int(col[2])       

            
        col1, col2, col3,col4 = st.columns(4)
        col1.metric("Placed Students", pl)
        col2.metric("Unplaced Students", int(total-pl))
        col3.metric("TOTAL", total)
        col4.metric("Companies", val3)
        Y = st.selectbox('Select Attribute', ['Package', 'Count'])
        c1, c2 = st.columns((5,5))
        with c1:     
                
            st.markdown('### Company With {temp}'.format(temp=str(Y)))           
            st.bar_chart(data=nf, x='NameofCompany', y=Y, width=0, height=0, use_container_width=True)
            btn1=st.button("Show Analysis")
            if btn1:
                st.write("The bar graph shows the packages which offered by different companies and shows the count of hired student by each company.")
        with c2:
            st.markdown('### Company With {temp}'.format(temp=str(Y)))        
            
            fig = px.pie(nf, values=Y, names='NameofCompany',                   
                        height=300, width=200)
            fig.update_layout(margin=dict(l=30, r=20, t=40, b=0),)
            st.plotly_chart(fig, use_container_width=True)
            btn2=st.button("Analysis")
            if btn2:
                st.write("The pie chart shows the percentage of students who were hired by each company comapare to total no of student and shows the different packages that were offered")

            # Slider
        company = nf['NameofCompany'].unique().tolist()
        package = nf['Package'].unique().tolist()
            
        package_selection = st.slider('Select Range Of Package', min_value=min(package),max_value=max(package),value=(min(package), max(package)))

        mask = (nf['Package'].between(*package_selection))
        n = nf[mask].shape[0]      

        sh = nf[mask]

        barChart = px.bar(sh, x='NameofCompany', y='Count', text="Package",
                            color_discrete_sequence = ['#F63366'],
                            template= 'plotly_white')

        st.plotly_chart(barChart)
        btn3=st.button("Show analysis")
        if btn3:
            st.write("The bar graph shows the number of employees hired by company name by choosing range of packages offered.")
        #top 3 companies
        max1=0
        max2=0
        max3=0
        str1=""
        str2=""
        str3=""
        st.markdown("### Top 3 Companies this year")
        with open("TNP_21-22.csv") as cards:
            csv_reader = csv.reader(cards)
            for index,col in enumerate(csv_reader):
                if(index!=0):
                    if(max1<int(col[3])):
                        max3=max2
                        max2=max1
                        max1=int(col[3])
                        str3=str2
                        str2=str1
                        str1=str(col[1])
                    
                    if(max2<int(col[3]) and max1!=int(col[3])):
                        max3=max2
                        max2=int(col[3])
                        str3=str2
                        str2=str(col[1])
                    
                    if(max3<int(col[3]) and max2!=int(col[3]) and max1!=int(col[3])):
                        max3=int(col[3])
                        str3=str(col[1])
                



        data={"name":[str1,str2,str3],"count":[max1,max2,max3]}
        data=pd.DataFrame(data)
        data=data.set_index("name")
        st.bar_chart(data)
        btn4=st.button("show analysis")
        if btn4:
            st.write("bar graph that shows the company name and the highest 3 count of hired students.")

    elif year == '2022-23' :
        val3=int(bf['SrNo'].count())
        with open('TNP22-23Final.csv') as cards:
            csv_reader = csv.reader(cards)
            for index, col in enumerate(csv_reader):
                if index == 2:                
                    total = int(col[2])
                if index == 3:
                    pl = int(col[2])       

            
        col1, col2, col3,col4 = st.columns(4)
        col1.metric("Placed Students", pl)
        col2.metric("Unplaced Students", int(total-pl))
        col3.metric("TOTAL", total)
        col4.metric("Companies", val3)
        
        Y = st.selectbox('Select Attribute', ['Package', 'Count'])
        c1, c2 = st.columns((5,5))
        with c1:       
                
            st.markdown('### Company With {temp}'.format(temp=str(Y)))
            
            st.bar_chart(data=bf, x='NameofCompany', y=Y, width=0, height=0, use_container_width=True)
            btn1=st.button("Show Analysis")
            if btn1:
                st.write("The bar graph shows the packages which offered by different companies and shows the count of hired student by each company.")
        with c2:
            st.markdown('### Company With {temp}'.format(temp=str(Y)))       
            
            fig = px.pie(bf, values=Y, names='NameofCompany',                   
                        height=300, width=200)
            fig.update_layout(margin=dict(l=30, r=20, t=40, b=1),)
            st.plotly_chart(fig, use_container_width=True)
            btn2=st.button("Analysis")
            if btn2:
                st.write("The pie chart shows the percentage of students who were hired by each company comapare to total no of student and shows the different packages that were offered")

            # Slider
        company = bf['NameofCompany'].unique().tolist()
        package = bf['Package'].unique().tolist()
            
        package_selection = st.slider('Select Range Of Package', min_value=min(package),max_value=max(package),value=(min(package), max(package)))

        mask = (bf['Package'].between(*package_selection))
        n = bf[mask].shape[0]      

        sh = bf[mask]

        barChart = px.bar(sh, x='NameofCompany', y='Count', text="Package",
                            color_discrete_sequence = ['#F63366'],
                            template= 'plotly_white')

        st.plotly_chart(barChart)
        btn3=st.button("Show analysis")
        if btn3:
            st.write("The bar graph shows the number of employees hired by company name by choosing range of packages offered.")
        #top 3 companies
        max1=0
        max2=0
        max3=0
        str1=""
        str2=""
        str3=""
        st.markdown("### Top 3 Companies this year")
        with open("TNP_22-23.csv") as cards:
            csv_reader = csv.reader(cards)
            for index,col in enumerate(csv_reader):
                if(index!=0):
                    if(max1<int(col[3])):
                        max3=max2
                        max2=max1
                        max1=int(col[3])
                        str3=str2
                        str2=str1
                        str1=str(col[1])
                    
                    if(max2<int(col[3]) and max1!=int(col[3])):
                        max3=max2
                        max2=int(col[3])
                        str3=str2
                        str2=str(col[1])
                    
                    if(max3<int(col[3]) and max2!=int(col[3]) and max1!=int(col[3])):
                        max3=int(col[3])
                        str3=str(col[1])
                



        data={"name":[str1,str2,str3],"count":[max1,max2,max3]}
        data=pd.DataFrame(data)
        data=data.set_index("name")
        st.bar_chart(data)
        btn4=st.button("show analysis")
        if btn4:
            st.write("bar graph that shows the company name and the highest 3 count of hired students.")
   
    elif year=='All Academic Year Analysis':
        val1 = int(df['SrNo'].count())
        val2 = int(nf['SrNo'].count())
        val3 = int(bf['SrNo'].count())
        col1, col2, col3 = st.columns(3)
        col1.metric("2020-21", val1)
        col2.metric("2021-22", val2)
        col3.metric("2022-23", val3)
        c1, c2 = st.columns((5,5))
        with c1:           
            st.markdown('### Number of Companies')
            val1 = int(df['SrNo'].count())
            val2 = int(nf['SrNo'].count())
            val3 = int(bf['SrNo'].count())

            energy_source = pd.DataFrame({
                "Count":  [val1, val2, val3],
                "Year": ['2020-21', '2021-22', '2022-23'],
            })
            
            fig = alt.Chart(energy_source).mark_line().encode(
                    y= "Count",
                    x="Year",).properties(
                    height=400, width=700,
                    title="Line Chart"
                )
            st.altair_chart(fig,theme="streamlit", use_container_width=True)
            btn1=st.button("Show Analysis")
            if btn1:
                st.write("line chart that shows the number of companies that came for placement in every year")
        with c2:
            # Group Chart
            st.markdown('### Placed and Total Students')
            with open('TNP20-21Final.csv') as cards:
                csv_reader = csv.reader(cards)
                for index, col in enumerate(csv_reader):
                    if index == 2:
                        # st.write(col[2])
                        n1 = int(col[2])
                    if index == 3:
                        p1 = int(col[2])

            with open('TNP21-22Final.csv') as cards:
                csv_reader = csv.reader(cards)
                for index, col in enumerate(csv_reader):
                    if index == 2:
                        # st.write(col[2])
                        n2 = int(col[2])
                    if index == 3:
                        p2 = int(col[2])
                    

            with open('TNP22-23Final.csv') as cards:
                csv_reader = csv.reader(cards)
                for index, col in enumerate(csv_reader):
                    if index == 2:
                        # st.write(col[2])
                        n3 = int(col[2])
                    if index == 3:
                        p3 = int(col[2])

            pf = pd.DataFrame({
                "YEAR": ['2020-21', "2021-22", "2022-23"],
                "TOTAL": [n1, n2, n3],
                "PLACE": [p1, p2, p3]
            })



            st.altair_chart((
            alt.Chart(pf)
                .transform_fold(["TOTAL", "PLACE"], as_=["key", "value"])
                .mark_bar()
                .encode(
                    x="key:N",
                    y="value:Q",
                    color="key:N",
                    column="YEAR",
                ).properties(
                    height=250,
                    width=90,
                   
                )
            ))
            btn2=st.button("show Analysis")
            if btn2:
                st.write("The grouped chart shows the total number of students and the number of students who were placed.")
        
        c3, c4 = st.columns((5,5))
        with c3:           
            st.markdown('### Total Students')
            with open('TNP20-21Final.csv') as cards:
                csv_reader = csv.reader(cards)
                for index, col in enumerate(csv_reader):
                    if index == 2:
                    # st.write(col[2])
                        total1 = int(col[2])

            with open('TNP21-22Final.csv') as cards:
                csv_reader = csv.reader(cards)
                for index, col in enumerate(csv_reader):
                    if index == 2:
                        # st.write(col[2])
                        total2 = int(col[2])

            with open('TNP22-23Final.csv') as cards:
                csv_reader = csv.reader(cards)
                for index, col in enumerate(csv_reader):
                    if index == 2:
                        # st.write(col[2])
                        total3 = int(col[2])

            data={"Year":["2020-21", "2021-22", "2022-23"], "Total Students":[total1, total2, total3]}
            data=pd.DataFrame(data)
            data=data.set_index("Year")

            st.bar_chart(data)
            btn3=st.button("show analysis")
            if btn3:
                st.write("The bar graph shows the total number of students who appeared for placement each year")

        with c4:
            st.markdown('### Average Package')
            with open('TNP20-21Final.csv') as cards:
                csv_reader = csv.reader(cards)
                for index, col in enumerate(csv_reader):
                    if index == 11:
                        # st.write(col[2])
                        avg1 = float(col[2])

                with open('TNP21-22Final.csv') as cards:
                    csv_reader = csv.reader(cards)
                    for index, col in enumerate(csv_reader):
                        if index == 11:
                            # st.write(col[2])
                            avg2 = float(col[2])

                with open('TNP22-23Final.csv') as cards:
                    csv_reader = csv.reader(cards)
                    for index, col in enumerate(csv_reader):
                        if index == 11:
                            # st.write(col[2])
                            avg3 = float(col[2])

                data={"Year":["2020-21", "2021-22", "2022-23"], "Avarage":[avg1, avg2, avg3]}
                data=pd.DataFrame(data)
                data=data.set_index("Year")

                st.bar_chart(data)
                btn4=st.button("show analysis ")
                if btn4:
                    st.write("The bar graph shows the average package of placement for each year")   
            
           
        c5, c6 = st.columns((5,5))
        with c5:           
            st.markdown('### Maximum Package')
            with open('TNP20-21Final.csv') as cards:
                csv_reader = csv.reader(cards)
                for index, col in enumerate(csv_reader):
                    if index == 10:
                        # st.write(col[2])
                        max1 = float(col[2])

                with open('TNP21-22Final.csv') as cards:
                    csv_reader = csv.reader(cards)
                    for index, col in enumerate(csv_reader):
                        if index == 10:
                            # st.write(col[2])
                            max2 = float(col[2])

                with open('TNP22-23Final.csv') as cards:
                    csv_reader = csv.reader(cards)
                    for index, col in enumerate(csv_reader):
                        if index == 10:
                            # st.write(col[2])
                            max3 = float(col[2])

                data={"Year":["2020-21", "2021-22", "2022-23"], "Maximum":[max1, max2, max3]}
                data=pd.DataFrame(data)
                data=data.set_index("Year")

                st.bar_chart(data)
                btn5=st.button("Show analysis ")
                if btn5:
                    st.write("The bar graph shows the maximum package of placement for each year")

        with c6:
            st.markdown('### Minimum Package')
            with open('TNP20-21Final.csv') as cards:
                csv_reader = csv.reader(cards)
                for index, col in enumerate(csv_reader):
                    if index == 9:
                        # st.write(col[2])
                        min1 = float(col[2])

            with open('TNP21-22Final.csv') as cards:
                csv_reader = csv.reader(cards)
                for index, col in enumerate(csv_reader):
                    if index == 9:
                        # st.write(col[2])
                        min2 = float(col[2])

            with open('TNP22-23Final.csv') as cards:
                csv_reader = csv.reader(cards)
                for index, col in enumerate(csv_reader):
                    if index == 9:
                        # st.write(col[2])
                        min3 = float(col[2])

            data={"Year":["2020-21", "2021-22", "2022-23"], "Minimum":[min1, min2, min3]}
            data=pd.DataFrame(data)
            data=data.set_index("Year")

            st.bar_chart(data)
            #compititive exam
            btn6=st.button("Show analysis  ")
            if btn6:
                st.write("The bar graph shows the minimum package of placement for each year ")

        
        st.markdown("### Compititive Exam data analysis")
        with open('TNP20-21Final.csv') as cards:
            csv_reader = csv.reader(cards)
            for index, col in enumerate(csv_reader):
                if index == 4:                    
                    n1 = int(col[2])
                if index == 5:
                    p1 = int(col[2])

        with open('TNP21-22Final.csv') as cards:
            csv_reader = csv.reader(cards)
            for index, col in enumerate(csv_reader):
                if index == 4:                
                    n2 = int(col[2])
                if index == 5:
                    p2 = int(col[2])
                    

        with open('TNP22-23Final.csv') as cards:
            csv_reader = csv.reader(cards)
            for index, col in enumerate(csv_reader):
                if index == 4:                    
                    n3 = int(col[2])
                if index == 5:
                    p3 = int(col[2])

        pf = pd.DataFrame({
                "YEAR": ['2020-21', "2021-22", "2022-23"],
                "APPEARED": [n1, n2, n3],
                "CLEARED": [p1, p2, p3]
            })
        st.altair_chart((

        alt.Chart(pf)
                .transform_fold(["APPEARED", "CLEARED"], as_=["key", "value"])
                .mark_bar()
                .encode(
                    x="key:N",
                    y="value:Q",
                     color="key:N",
                    column="YEAR",
                ).properties(
                    height=250,
                    width=110,
                   
                )),
            
        )
        btn7=st.button("Show analysis   ")
        if btn7:
            st.write("The grouped chart shows the total number of students who appeared for a competitive exam and the number of students who cleared the exam ")


            

elif data=='Expert Talk':
    year = st.sidebar.selectbox("Select Sem for 21-22 Session", ['Sem-1', 'Sem-2'])
    df1 = pd.read_csv("Dept_of_Computer_Expert_Talk 21-22-sem_1.csv")
    df2 = pd.read_csv("Dept_of_Computer_Expert_Talk 21-22-sem_2.csv")
    if year == 'Sem-1' :
        str1='Dept_of_Computer_Expert_Talk 21-22-sem_1.csv'
    if year == 'Sem-2' :
        str1='Dept_of_Computer_Expert_Talk 21-22-sem_2.csv'
    count1=0
    count2=0
    count3=0
    e1, e2 = st.columns((5,5))
    with e1:
        st.markdown("### Total No Of Session per Year")
        with open(str1) as cards:
            csv_reader = csv.reader(cards)
            for index, col in enumerate(csv_reader):
                if(index!=0):
                    n1 = str(col[9])
                    ans=""+n1[0]
                    ans=ans+n1[1]
                    #st.write(ans)
                    if(len(n1)>2):
                        ans1=""+n1[3]
                        ans1=ans1+n1[4]
                        if ans1=="SE":
                            count1=count1+1
                        if ans1=="TE":            
                            count2=count2+1
                        if ans1=="BE":
                            count3=count3+1
                    if ans =='SE':
                        count1=count1+1            
                    if ans =='TE':
                        count2=count2+1
                    if ans =="BE":
                        count3=count3+1
        data={"name":["SE","TE","BE"],"count":[count1,count2,count3]}
        data=pd.DataFrame(data)
        data=data.set_index("name")
        st.bar_chart(data)                   
        
        #Avergae of student attended session year wise
       
    with e2:
        sum1=0
        sum2=0
        sum3=0
        flag=0

        st.markdown("### Total No of student per year in average")
        with open(str1) as cards:
            csv_reader = csv.reader(cards)
            for index, col in enumerate(csv_reader):
                if(index!=0):
                    n1 = str(col[9])
                    ans=""+n1[0]
                    ans=ans+n1[1]
                    #st.write(ans)
                    if(len(n1)>2):
                        ans1=""+n1[3]
                        ans1=ans1+n1[4]
                        if ans1=="SE":
                            sum1=sum1+int(col[10])
                            count1=count1+1
                        if ans1=="TE":
                            sum2=sum2+int(col[10])            
                            count2=count2+1
                        if ans1=="BE":
                            sum3=sum3+int(col[10])
                            count3=count3+1;
                    if ans =='SE':
                        sum1=sum1+int(col[10])
                        count1=count1+1            
                    if ans =='TE':
                        sum2=sum2+int(col[10])
                        count2=count2+1
                    if ans =="BE":
                        sum3=sum3+int(col[10])
                        count3=count3+1;        
        # st.write("SE",sum1)
        # st.write("TE",sum2)
        # st.write("BE",sum3)
                
        avg1=sum1/count1
        avg2=sum2/count2
        avg3=sum3/count3         

        data={"name":["SE","TE","BE"],"count":[avg1,avg2,avg3]}
        data=pd.DataFrame(data)
        data=data.set_index("name")
        st.bar_chart(data)  

        #6th 

        count1=0
        count2=0
        count3=0
        count4=0
        count5=0
    e3,e4=st.columns((5,5))
    with e3:
        st.markdown("### Cities of Expert")
        Location= st.selectbox('Select Semester', ['Sem 1 location', 'Sem 2 location'])
        if Location == 'Sem 1 location' :
            city_counts = ef['Location'].value_counts()
            pie_chart = px.pie(values=city_counts.values, names=city_counts.index)

            st.plotly_chart(pie_chart)
        elif Location == 'Sem 2 location' :
            city_counts = ef1['Location'].value_counts()
            pie_chart = px.pie(values=city_counts.values, names=city_counts.index)

            st.plotly_chart(pie_chart)
    with e4:
        st.markdown("### Sessions per month")
        if(str1=="Dept_of_Computer_Expert_Talk 21-22-sem_1.csv"):
            with open(str1) as cards:
                csv_reader = csv.reader(cards)
                for index, col in enumerate(csv_reader):
                    if(index!=0):
                        n1 = str(col[5])
                    #st.write(n1)
                        if(n1.__contains__('Aug')):
                            count1=count1+1
                        elif(n1.__contains__('Sep')):
                            count2=count2+1
                        elif(n1.__contains__('Oct')):
                            count3=count3+1
                        elif(n1.__contains__('Nov')):
                            count4=count4+1
                        elif(n1.__contains__('Dec')):
                            count5=count5+1
            data={"name":["Aug","Sep","Oct","Nov","Dec"],"count":[count1,count2,count3,count4,count5]}
            data=pd.DataFrame(data)
            data=data.set_index("name")
            st.bar_chart(data) 
        else:
            with open(str1) as cards:
                csv_reader = csv.reader(cards)
                for index, col in enumerate(csv_reader):
                    if(index!=0):
                        n1 = str(col[5])
                    #st.write(n1)
                        if(n1.__contains__('Feb')):
                            count2=count2+1
                        elif(n1.__contains__('March')):
                            count3=count3+1
                        elif(n1.__contains__('April')):
                            count4=count4+1
                        elif(n1.__contains__('May')):
                            count5=count5+1
            data={"name":["Feb","March","April","May"],"count":[count2,count3,count4,count5]}
            data=pd.DataFrame(data)
            data=data.set_index("name")
            st.bar_chart(data) 
            
            


    

    
    #Expert talk analysis  1)
    st.markdown("### Total student Present for Session")
        
    Attribute= st.selectbox('Select Semester', ['Sem 1', 'Sem 2'])
    if Attribute == 'Sem 1' :

        barChart = px.bar(ef, x='Topic', y='Total', text='Total', color_discrete_sequence=['#F63366'], template='plotly_white')
        st.plotly_chart(barChart)

    elif Attribute == 'Sem 2' :

        barChart = px.bar(ef1, x='Topic', y='Total', text='Total', color_discrete_sequence=['#F63366'], template='plotly_white')
        st.plotly_chart(barChart)
    

