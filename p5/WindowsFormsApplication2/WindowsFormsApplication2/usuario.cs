using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Data.SqlClient;
using System.Drawing;
using System.Text;
using System.Windows.Forms;
    

namespace WindowsFormsApplication2
{
    public partial class usuario : Form
    {

        DataSet ds = new DataSet();
        SqlDataAdapter ada = new SqlDataAdapter();
        private int userId;
        public usuario(int userId)
        {
            InitializeComponent();
            this.userId = userId;
        }

        private void Form2_Load(object sender, EventArgs e)
        {
            SqlConnection con = new SqlConnection();
            con.ConnectionString = "server=DESKTOP-957VEUH\\MISSAEL70586532;database=BDMissael;Integrated Security=True;";

            ada.SelectCommand = new SqlCommand();
            ada.SelectCommand.Connection = con;
            ada.SelectCommand.CommandText = "select * from catastro where usuario_id = @userid";
            ada.SelectCommand.CommandType = CommandType.Text;
            ada.SelectCommand.Parameters.AddWithValue("@userid", userId);

            ada.Fill(ds, "catastro");
            dataGridView1.DataSource = ds;
            dataGridView1.DataMember = "catastro";
        }

        private void dataGridView1_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {
            
        }
    }
}
