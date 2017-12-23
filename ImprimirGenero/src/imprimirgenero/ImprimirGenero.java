/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package imprimirgenero;

import javax.swing.JOptionPane;

/**
 *
 * @author Mauricio
 */
public class ImprimirGenero {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        // inicializado o construtor da classe para assim criar-se instancias ou seja a chamada de metodos no metodo main
        ImprimirGenero imrpi = new ImprimirGenero();
        //defini um Dialog para qual tem como finalidade obter uma interface ao usuario para que assim o mesmo digite o nome desejado

        String variavel = JOptionPane.showInputDialog("Informe o nome desejado ");
        // passo a variavel com o nome digitado para um metodo com parametro 
        imrpi.recebeNome(variavel);
    }

    // Utilizei como regra de negocio uma analise tomando em consideração o fator que todos os nomes terminados em O são masculinos "Grande maioria"
    // e os terminados em A são femininos grande maioria tendo algumas excessoes como miguel joaquim, Tomas e para feminino
    // doralice clarice são nomes que foge do contexto mas grande maioria funcionam 
    public char recebeNome(String nome) {
        // definida uma variavel do tipo char para armazenar o ultimo caracter do nome recebido 
        char ultimo;
        // verifica se o nome é vazio 
        if (nome != null && nome.length() > 0) {
            // aqui você pega o último char da string e aramazena no ultimo caracter 
            ultimo = nome.charAt(nome.length() - 1);
            // converte o Char para String para que assim faça a verificação no if 
            String opcao1 = Character.toString(ultimo);
            //verifica-se utilizando a regra se for "O" é masculino tendo como base 
            // que grande maioria dos nomes são terminados em O alguns casos a parte coloquei aqui !
            if (opcao1.equals("o") || nome.equals("guilherme") || nome.equals("henrique") || nome.equals("luiz") || nome.equals("davi") || nome.equals("george") || nome.equals("gaspar") || nome.equals("vicente")) {
                JOptionPane.showMessageDialog(null, "Masculino");
            } else if (opcao1.equals("e") || opcao1.equals("a") || nome.equals("beatriz")) {
                JOptionPane.showMessageDialog(null, "Feminino");
            }else{
                 JOptionPane.showMessageDialog(null, "Indefinido ");
            }

        } else {
            JOptionPane.showMessageDialog(null, "Digite um valor valido ");
        }
        return (char) 0;

    }

}
