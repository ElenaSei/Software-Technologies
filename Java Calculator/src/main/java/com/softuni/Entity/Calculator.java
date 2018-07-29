package com.softuni.Entity;

public class Calculator {
    private Double leftOperand;
    private Double rightOperand;
    private String operator;

    public Calculator() {
    }

    public double getLeftOperand() {
        return leftOperand;
    }

    public void setLeftOperand(double leftOperand) {
        this.leftOperand = leftOperand;
    }

    public double getRightOperand() {
        return rightOperand;
    }

    public void setRightOperand(double rightOperand) {
        this.rightOperand = rightOperand;
    }

    public String getOperator() {
        return operator;
    }

    public void setOperator(String operator) {
        this.operator = operator;
    }

    public Calculator(Double leftOperand, Double rightOperand, String operator) {
        this.leftOperand = leftOperand;
        this.rightOperand = rightOperand;
        this.operator = operator;
    }

    public Double calculateResult(){

        switch (this.operator){
            case "+":
                return this.leftOperand + this.rightOperand;
            case "-":
                return this.leftOperand - this.rightOperand;
            case "*":
                return this.leftOperand * this.rightOperand;
            case "/":
                return this.leftOperand / this.rightOperand;
                default:
                    return null;
        }
    }
}
