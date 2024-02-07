

<?PHP
require_once("ClasseUsuario.php");
require_once("config.php");


$host = "localhost";
$dbname = "controle_de_estoque";
$username = "root";
$password = "phporientado123";
$port = 3306;




class ConexaoDB{

   
    private $conexao; 


   public function __construct($host, $username, $password, $dbname, $port ){
        $this->conexao = new mysqli($host, $username, $password, $dbname, $port);
   }

   public function getConexao(){
    return $this->conexao;
   }

   public function FecharConexao(){
    $this-> conexao->close();
   }

   public function Cadastrar($User){

    
  $host = "localhost";
  $dbname = "controle_de_estoque";
  $username = "root";
  $password = "phporientado123";
  $port = 3306;

    $nome = $User->getNome();
    $sobrenome = $User->getSobrenome();
     $email = $User->getEmail(); 
     $senha = $User->getSenha(); 
     $endereco = $User->getEndereco(); 
     $bairro = $User->getBairro(); 
     $cidade = $User->getCidade(); 
     $estado = $User->getEstado(); 
     $cep = $User->getCep();

     $select = new mysqli($host, $username, $password, $dbname, $port);
     $verificacao = "SELECT * FROM user WHERE email = '$email'";
     $resultado = $select->query($verificacao);

     if ($nome == " " || $sobrenome == " " || $email == " " || $senha == " " || $endereco == " " || $bairro == " " || $cidade == " " || $estado == "" || $cep == ""){
      $mensagens['status'] = 'erro';
      $mensagens['msg'] = 'Verifique os campos e tente novamente!';
      $_SESSION['msg_inserir'] = $mensagens;

    } else{
        if($select->affected_rows == 1){
        $mensagens['status'] = 'erro';
        $mensagens['msg'] = 'Já existe um usuário com este e-mail!';
        $_SESSION['msg_inserir'] = $mensagens;
  
        
      
        
  
       }else{
        $mensagens['status'] = 'sucesso';
        $mensagens['msg'] = 'Usuário cadastrado com sucesso!';
        $_SESSION['msg_inserir'] = $mensagens;
  
  
  
        $sql = "INSERT INTO user (nome, sobrenome, email, senha, endereco, bairro, cidade, estado, cep) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
  
       
        $PreparandoSQL = $this->conexao->prepare($sql);
        
       
      
        $PreparandoSQL->bind_param('sssssssss',  $nome, $sobrenome,  $email, $senha, $endereco, $bairro,  $cidade, $estado, $cep
        
        
      );
   
        $PreparandoSQL->execute();
   
        
        
   
        
      }
    }

      
    
    
    




    
      
     }
    




  


}

?>