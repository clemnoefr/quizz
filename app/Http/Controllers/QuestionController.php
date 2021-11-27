<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function ShowQuizz()
    {

        // recup 10 questions aléatoirement
        $quizz = Question::all()->random(10);
        return view("quizz")->with("quizz", $quizz);
    }

    public function VerifQuizz(Request $request)
    {
        $total = 0;
        $values = $request->all();
        for ($i = 1; $i < 11; $i++) {
            $id = $values["id_question_" . $i];
            $reponse = Question::find($id)->reponse1;
            if ($reponse == $values["reponse_" . $i]) {
                $total++;
            }
        }
    }

    public function CreateQuestion(Request $request)
    {
        $validatedData = $request->validate([
            'question' => 'required|string',
            'reponse1' => 'required|string',
            'reponse2' => 'required|string',
            'reponse3' => 'required|string',
            'reponse4' => 'required|string',
        ]);
        $values = $request->all();

        $question = new Question();
        $question->question = $values["question"];
        $question->categorie = $values["categorie"];
        $question->reponse1 = $values["reponse1"];
        $question->reponse2 = $values["reponse2"];
        $question->reponse3 = $values["reponse3"];
        $question->reponse4 = $values["reponse4"];
        $question->save();

        return view("question")->with("success", "ok");
    }
}
