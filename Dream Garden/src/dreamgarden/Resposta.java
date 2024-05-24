package dreamgarden;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

public class Resposta extends HttpServlet {

    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        // Obtenha os valores enviados pelo formulário
        String emailCliente = request.getParameter("emailCliente");
        String nomeCliente = request.getParameter("nomeCliente");
        String senhaCliente = request.getParameter("senhaCliente");
        String enderecoCliente = request.getParameter("enderecoCliente");
        String cidadeCliente = request.getParameter("cidadeCliente");
        String cepCliente = request.getParameter("cepCliente");
        String cpfCliente = request.getParameter("cpfCliente");

        // Configure a resposta do HTML
        response.setContentType("text/html");
        PrintWriter out = response.getWriter();
        out.println("<html>");
        out.println("<head>");
        out.println("<title>Resposta do formulário</title>");
        out.println("</head>");
        out.println("<body>");
        out.println("<h1>Resposta do formulário</h1>");
        out.println("<p>Obrigado por se cadastrar, " + nomeCliente + "!</p>");
        out.println("<p>Seu cadastro foi efetuado com sucesso.</p>");
        out.println("<p>Seus dados cadastrados:</p>");
        out.println("<ul>");
        out.println("<li>Email: " + emailCliente + "</li>");
        out.println("<li>Senha: " + senhaCliente + "</li>");
        out.println("<li>Endereço: " + enderecoCliente + "</li>");
        out.println("<li>Cidade: " + cidadeCliente + "</li>");
        out.println("<li>CEP: " + cepCliente + "</li>");
        out.println("<li>CPF: " + cpfCliente + "</li>");
        out.println("</ul>");
        out.println("</body>");
        out.println("</html>");
        out.flush();
    }
}
