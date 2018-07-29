package com.softuni.controller;

import com.softuni.Entity.Calculator;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestParam;

import java.text.DecimalFormat;

@Controller
public class HomeController {
	@GetMapping("/")
	public String index(Model model) {
		model.addAttribute("operator", "+");
		model.addAttribute("view", "views/calculatorForm");

		return "base-layout";
	}

	@PostMapping("/")
	public String calculate(Model model
	, @RequestParam(name = "leftOperand") Double leftOperand
	, @RequestParam(name = "rightOperand") Double rightOperand
	, @RequestParam(name = "operator") String operator){
		Calculator calculator = new Calculator(leftOperand, rightOperand, operator);

		Double result = calculator.calculateResult();
		DecimalFormat df = new DecimalFormat("#.##");


		model.addAttribute("leftOperand", df.format(leftOperand));
		model.addAttribute("rightOperand", df.format(rightOperand));
		model.addAttribute("operator", operator);
		model.addAttribute("result", df.format(result));
		model.addAttribute("view", "views/calculatorForm");

		return "base-layout";
	}
}
