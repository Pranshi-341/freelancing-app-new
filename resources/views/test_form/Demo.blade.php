<form method="post" action="{{ route('proficiency_test') }}">
    @csrf
    <label for="q1">What is the purpose of an essay?</label>
    <input type="radio" id="q1" name="q1" value="a">A. To inform the reader<br>
    <input type="radio" id="q1" name="q1" value="b">B. To persuade the reader<br>
    <input type="radio" id="q1" name="q1" value="c">C. To entertain the reader<br>
    <input type="radio" id="q1" name="q1" value="d">D. All of the above<br>

    <label for="q2">What is the first step in the essay writing process?</label>
    <input type="radio" id="q2" name="q2" value="a">A. Editing<br>
    <input type="radio" id="q2" name="q2" value="b">B. Outlining<br>
    <input type="radio" id="q2" name="q2" value="c">C. Brainstorming<br>
    <input type="radio" id="q2" name="q2" value="d">D. Researching<br>

    <label for="q3">Which of the following is NOT an important element of a strong thesis statement?</label>
    <input type="radio" id="q3" name="q3" value="a">A. Specificity<br>
    <input type="radio" id="q3" name="q3" value="b">B. Clarity<br>
    <input type="radio" id="q3" name="q3" value="c">C. Ambiguity<br>
    <input type="radio" id="q3" name="q3" value="d">D. Arguability<br>

    <label for="q4">What is the purpose of the introduction in an essay?</label>
    <input type="radio" id="q4" name="q4" value="a">A. To provide background information<br>
    <input type="radio" id="q4" name="q4" value="b">B. To hook the reader<br>
    <input type="radio" id="q4" name="q4" value="c">C. To present the thesis statement<br>
    <input type="radio" id="q4" name="q4" value="d">D. All of the above<br>

    <label for="q5">What is the purpose of the conclusion in an essay?</label>
    <input type="radio" id="q5" name="q5" value="a">A. To summarize the main points<br>
    <input type="radio" id="q5" name="q5" value="b">B. To restate the thesis<br>
    <input type="radio" id="q5" name="q5" value="c">C. To leave a lasting impression on the reader<br>
    <input type="radio" id="q5" name="q5" value="d">D. All of the above<br>

    <label for="q6">What is the difference between a primary source and a secondary source?</label>
    <input type="radio" id="q6" name="q6" value="a">A. A primary source is written by an expert in the field, while a secondary source is written by a layperson.<br>
    <input type="radio" id="q6" name="q6" value="b">B. A primary source is an original document or artifact, while a secondary source is a document that analyzes or interprets primary sources.<br>
    <input type="radio" id="q6" name="q6" value="c">C. A primary source is always more reliable than a secondary source.<br>
    <input type="radio" id="q6" name="q6" value="d">D. A secondary source is more objective than a primary source.<br>

    <label for="q7">What is the purpose of incorporating evidence in an essay?</label>
    <input type="radio" id="q7" name="q7" value="a">A. To support the thesis statement<br>
    <input type="radio" id="q7" name="q7" value="b">B. To demonstrate credibility<br>
    <input type="radio" id="q7" name="q7" value="c">C. To provide context<br>
    <input type="radio" id="q7" name="q7" value="d">D. All of the above<br>

    <label for="q8">Which of the following is NOT a common organizational structure for an essay?</label>
    <input type="radio" id="q8" name="q8" value="a">A. Chronological<br>
    <input type="radio" id="q8" name="q8" value="b">B. Spatial<br>
    <input type="radio" id="q8" name="q8" value="c">C. Personal<br>
    <input type="radio" id="q8" name="q8" value="d">D. Cause and effect<br>

    <label for="q9">Which of the following is an effective strategy for revising an essay?</label>
    <input type="radio" id="q9" name="q9" value="a">A. Reading the essay out loud<br>
    <input type="radio" id="q9" name="q9" value="b">B. Checking for coherence and unity<br>
    <input type="radio" id="q9" name="q9" value="c">C. Eliminating irrelevant information<br>
    <input type="radio" id="q9" name="q9" value="d">D. All of the above<br>

    <label for="q10">Which of the following is NOT an effective way to improve the clarity and coherence of an essay?</label>
    <input type="radio" id="q10" name="q10" value="a">A. Varying sentence structure<br>
    <input type="radio" id="q10" name="q10" value="b">B. Using transitional words and phrases<br>
    <input type="radio" id="q10" name="q10" value="c">C. Including technical jargon and acronyms<br>
    <input type="radio" id="q10" name="q10" value="d">D. Avoiding passive voice<br>

    <button type="submit">Submit</button>
</form>